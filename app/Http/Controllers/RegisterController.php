<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Validation\ValidatesRequests;

class RegisterController extends Controller
{
    public function index() 
    {
        return view('auth.register');
    }

    use ValidatesRequests;

    public function store(Request $request)
    {
        // Validación
        $this->validate($request, [
            'name' => 'required|string|max:30',
            'username' => 'required|string|max:50|min:2',
            'email' => 'required|string|email|max:60|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
    }
}
