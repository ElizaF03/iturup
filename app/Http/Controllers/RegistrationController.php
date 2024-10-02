<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegistrationController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }
    public function register(Request $request){
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'nullable|string|max:15',
            'password' => 'required|string|min:8|confirmed',

        ]);
        $user=User::create([
            'role'=>'user',
            'name'=>$validated['name'],
            'email'=>$validated['email'],
            'phone'=>$validated['phone'],
            'password'=>Hash::make($validated['password']),
        ]);
        return redirect('/')->with('success', 'Регистрация успешна!');
    }
}
