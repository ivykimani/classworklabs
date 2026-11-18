<?php
use App\Http\Controllers\AdminOrderController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
Route::view('/', 'home')->name('home');
Route::get('/menu', [ProductController::class, 'index'])->name('menu');
Route::post('/checkout', [OrderController::class, 'checkout'])->name('checkout');
Route::post('/place-order', [OrderController::class, 'store'])->name('orders.store');
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])
 ->middleware('auth')
 ->name('logout');
Route::middleware('auth')->group(function () {
 Route::get('/dashboard', [CustomerController::class, 'dashboard'])
 ->name('customer.dashboard');
});
Route::middleware(['auth', 'admin'])
 ->prefix('admin')
 ->name('admin.')
 ->group(function () {
 Route::get('/dashboard', [AdminOrderController::class, 'index'])
 ->name('dashboard');
 Route::get('/orders/{order}', [AdminOrderController::class, 'show'])
 ->name('orders.show');
 Route::patch('/orders/{order}/status', [AdminOrderController::class, 'updateStatus'])
 ->name('orders.status');
 });
