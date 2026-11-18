<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function dashboard()
    {
        /** @var User|null $user */
        $user = Auth::user();

        if (!$user || $user->role !== 'customer') {
            abort(403);
        }

        $orders = $user->orders()
            ->latest()
            ->get();

        return view('customer-dashboard', compact('orders'));
    }
}

