<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class Login extends Controller
{
    function index(){
        return view('login.login');
    }
    
    function forgotview(){
        return view('login.forgotpass');
    }

    function signup(){
        return view('login.signup');
    }

    public function update(Request $request, $id){
    }
    
    public function save(Request $request)
{
    // Validasi data input
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|string|min:6',
    ]);

    // Buat instance User baru
    $user = new User();
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = Hash::make($request->password); // Gunakan hashing dengan Hash
    $user->save(); // Simpan data ke tabel users

    // Redirect kembali dengan pesan sukses
    return redirect()->back()->with('success', 'User berhasil disimpan.');
}
    function login(Request $request) {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = DB::table('users')
            ->where('email', $request->email)
            ->where('password', $request->password)
            ->first();

        if($user) {
            return back()->with('success', 'Login Berhasil');
        }

        return back()->with('error', 'Email atau password salah.');
    }
}