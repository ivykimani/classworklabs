<?php
namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
class OrderController extends Controller
{
 public function checkout(Request $request)
 {
 $request->validate([
 'quantities' => ['required', 'array'],
 'quantities.*' => ['nullable', 'integer', 'min:0', 'max:50'],
 ]);
 $selected = collect($request->input('quantities', []))
 ->filter(fn ($quantity) => (int) $quantity > 0)
 ->map(fn ($quantity) => (int) $quantity);
 if ($selected->isEmpty()) {
 return back()
 ->withErrors(['quantities' => 'Choose at least one meal.'])
 ->withInput();
 }
 $products = Product::where('is_available', true)
 ->whereIn('id', $selected->keys())
 ->get();
 if ($products->count() !== $selected->count()) {
 return redirect('/menu')
 ->withErrors(['quantities' => 'One of the selected meals is no longer available.']);
 }
 $cart = $products->map(function ($product) use ($selected) {
 $quantity = $selected[$product->id];
 return [
 'product' => $product,
 'quantity' => $quantity,
 'line_total' => $product->price * $quantity,
 ];
 });
 $estimatedTotal = $cart->sum('line_total');
 return view('checkout', compact('cart', 'estimatedTotal'));
 }
 public function store(Request $request)
 {
 $validated = $request->validate([
 'name' => ['required', 'string', 'max:255'],
 'email' => ['required', 'email', 'max:255', 'unique:users,email'],
 'phone' => ['required', 'string', 'max:30'],
 'order_type' => ['required', Rule::in(['pickup', 'delivery'])],
 'delivery_address' => [
 Rule::requiredIf(fn () => $request->order_type === 'delivery'),
 'nullable',
 'string',
 'max:500',
 ],
 'special_note' => ['nullable', 'string', 'max:1000'],
 'quantities' => ['required', 'array'],
 'quantities.*' => ['nullable', 'integer', 'min:0', 'max:50'],
 ]);
 $selected = collect($validated['quantities'])
 ->filter(fn ($quantity) => (int) $quantity > 0)
 ->map(fn ($quantity) => (int) $quantity);
 if ($selected->isEmpty()) {
 throw ValidationException::withMessages([
 'quantities' => 'Choose at least one meal.',
 ]);
 }
 $products = Product::where('is_available', true)
 ->whereIn('id', $selected->keys())
 ->get()
 ->keyBy('id');
 if ($products->count() !== $selected->count()) {
 throw ValidationException::withMessages([
 'quantities' => 'One of the selected meals is no longer available.',
 ]);
 }
 $plainPassword = Str::random(10);
 $result = DB::transaction(function () use (
 $validated,
 $selected,
 $products,
 $plainPassword
 ) {
 $user = User::create([
 'name' => $validated['name'],
 'email' => $validated['email'],
 'phone' => $validated['phone'],
 'password' => Hash::make($plainPassword),
 'role' => 'customer',
 ]);
 $total = 0;
 foreach ($selected as $productId => $quantity) {
    $product = $products[$productId];
 $total += $product->price * $quantity;
 }
 $order = Order::create([
 'user_id' => $user->id,
 'order_type' => $validated['order_type'],
 'delivery_address' => $validated['order_type'] === 'delivery'
 ? $validated['delivery_address']
 : null,
 'special_note' => $validated['special_note'] ?? null,
 'total_amount' => $total,
 'status' => 'pending',
 ]);
 foreach ($selected as $productId => $quantity) {
 $product = $products[$productId];
 $order->items()->create([
 'product_id' => $product->id,
 'quantity' => $quantity,
 'unit_price' => $product->price,
 ]);
 }
 return ['user' => $user, 'order' => $order];
 });
 return view('order-success', [
 'user' => $result['user'],
 'order' => $result['order'],
 'plainPassword' => $plainPassword,
 ]);
 }
}