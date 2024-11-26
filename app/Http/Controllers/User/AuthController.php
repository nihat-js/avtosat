<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function viewRegister()
    {
        return view('pages.auth.register');
    }

    public function register(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|string|min:2|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed', // password_confirmation
        ]);

        // dd($validated);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route(route: 'login')->with('success', 'Qeydiyyat tamamlandı. Daxil olun zəhmət olmasa');
    }

    public function viewLogin()
    {
        return view('user.auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('viewHome')->with('success', 'Login successful.');
        }

        return back()->withErrors(['invalid' => 'Email və ya şifrə yanlışdır'])->withInput();
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Çıxış edildi');
    }
}
