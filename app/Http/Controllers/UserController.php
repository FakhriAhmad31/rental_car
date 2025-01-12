<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required|unique:users,phone',
            'license_number' => 'required|unique:users,license_number',
        ]);
    
        $user = User::create($request->all());
        
        // Simpan user ke session
        session(['user' => $user]);
    
        return redirect()->route('users.success'); // Alihkan ke halaman sukses
    }

}
