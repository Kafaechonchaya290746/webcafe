<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminRegisterController extends Controller
{
    public function showForm()
    {
        return view('admin.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:admins,username',
            'email' => 'required|email|unique:admins,email',
            'password' => 'required|min:6'
        ]);
    
        // สร้าง Admin ใหม่
        Admin::create([
            'username' => $request->username,
            'email'    => $request->email,
            'password' => Hash::make($request->password)
        ]);
    
        return redirect()->back()->with('success', 'สมัครผู้ดูแลระบบสำเร็จแล้ว!');
    }
    
}
