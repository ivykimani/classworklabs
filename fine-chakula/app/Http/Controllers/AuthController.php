<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
 public function showLogin()
 {
 if (Auth::check()) {
 return Auth::user()->role === 'admin'
 ? redirect('/admin/dashboard')
 : redirect('/dashboard');
 }
 return view('login');
 }
 public function login(Request $request)
 {
 $credentials = $request->validate([
   'email' => ['required', 'email'],
 'password' => ['required', 'string'],
 ]);
 if (! Auth::attempt($credentials)) {
 return back()
 ->withErrors(['email' => 'The email address or password is incorrect.'])
 ->onlyInput('email');
 }
 $request->session()->regenerate();
 return Auth::user()->role === 'admin'
 ? redirect('/admin/dashboard')
 : redirect('/dashboard');
 }
 public function logout(Request $request)
 {
 Auth::logout();
 $request->session()->invalidate();
 $request->session()->regenerateToken();
 return redirect('/login')->with('success', 'You have been logged out.');
 }
}
 
