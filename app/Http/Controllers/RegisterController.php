<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register()
    {
        return view('pages.auth.register');
    }

    public function simpanRegister(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'min:5',
            'username' => 'min:5',
            'email' => 'email:dns',
            'email_verified_at' => now(),
            'password' => 'required|min:5|max:255'
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        $request->session()->flash('name', $validatedData['name']);

        return redirect()->route('login')->with('message', 'Berhasil');
    }
}
