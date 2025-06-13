<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;

use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        if (Auth::check()) {
            return redirect('/beranda');
        }
        return view('login');
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            // Throw exception validasi agar otomatis redirect dengan error
            throw ValidationException::withMessages($validator->errors()->toArray());
        }

        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember');

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();

            Session::put('last_login', now());

            return Redirect::intended('/beranda')->with('success', 'Selamat datang, ' . Auth::user()->name);
        }

        // Kalau gagal login, kembalikan error manual
        return Redirect::back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->withInput($request->only('email'));
    }

   public function showRegisterForm()
{
    if (Auth::check()) {
        return redirect('/beranda'); // atau '/beranda'
    }
    return view('register');
}

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            throw ValidationException::withMessages($validator->errors()->toArray());
        }

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        // Redirect ke login setelah berhasil register
        return Redirect::to('/login')->with('success', 'Registrasi berhasil, silakan login.');
    }

    // Logout user
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}