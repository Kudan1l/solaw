<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class Login extends Controller
{
    function index(){
        return view('login.login');
    }
    
    function forgotview(){
        return view('login.forgotpass');
    }

    function signUpView(){
        return view('login.signup');
    }

    public function update(Request $request, $id){
    }

    public function signUpPost(Request $request)
    {
        // Validasi data input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
        ]);

        $existingUser = User::where('email', $request->email)->first();

        if ($existingUser) {
            // Jika email sudah ada, kembalikan dengan pesan error
            return redirect()->back()->with('error', 'Email sudah digunakan');
        }

        // Buat instance User baru
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password); // Gunakan hashing dengan Hash
        $user->save(); // Simpan data ke tabel users

        // Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'User berhasil disimpan.');
    }

    // function signUpPost(Request $request) {
    //     $request->validate([
    //         'name'=>'required',
    //         'email'=>'required',
    //         'password'=>'required',
    //     ]);

    //     User::create([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'password' => Hash::make($request->password),
    //     ]);
    //     return redirect('/login')->with('success', 'Akun Berhasil Dibuat');
    // }

    function login(Request $request) {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            // Jika cocok, login berhasil
            return redirect('/')->with('success', 'Login Berhasil');
        }

        return back()->with('error', 'Email atau password salah.');
    }
}