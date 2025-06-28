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
        throw ValidationException::withMessages($validator->errors()->toArray());
    }

    $credentials = $request->only('email', 'password');
    $remember = $request->has('remember');

    if (Auth::attempt($credentials, $remember)) {
        $request->session()->regenerate();

        $user = Auth::user();
        Session::put('last_login', now());

        switch ($user->role) {
            case 'dosen':
                return redirect('pages/dosen/dashboarddosen')->with('success', 'Selamat datang Dosen');
            case 'mahasiswa':
                return redirect('pages/mahasiswa/dashboardsiswa')->with('success', 'Selamat datang Mahasiswa');
            default:
                Auth::logout();
                return redirect('/login')->withErrors(['email' => 'Role tidak dikenali.']);
        }
    }
    return back()->withErrors(['email' => 'Email atau password salah.']);
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