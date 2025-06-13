<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
   public function login()
   {
    return view("login");
   }

   public function loginPOST(Request $request)
   {
    if(Auth::attempt)(([
        "email" => $request->email
        "password" => $request->password]))
        
        {
        $user = User::where("email",  $request->email)-> first();
        Auth::login($user);
        return redirect('/');
    }
    return redirect('/login')->with('error', 'email/password salah');
   }
}
