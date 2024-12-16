<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
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


    public function signUpPost(Request $request)
    {
        // Validasi data input
        $request->validate([
            'name' => ['required', 'regex:/^[a-zA-Z\s]+$/', 'max:50'],
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        // Buat instance User baru
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password); // Gunakan hashing dengan Hash
        $user->save(); // Simpan data ke tabel users

        // Auth::login($user);

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

    // function login (Request $request) {
    //     $request->validate([
    //         'email' => 'required',
    //         'password' => 'required',
    //     ]);

    //     $user = User::where('email', $request->email)->first();

    //     if ($user && Hash::check($request->password, $user->password)) {
            
    //         return redirect('/')->with('success', 'Login Berhasil');
    //     }

    //     return back()->with('error', 'Email atau password salah.');
    // }

    public function searchAccount(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'name' => 'required|string|max:255',
        ]);

        // Ambil input dari form
        $email = $request->input('email');
        $Name = $request->input('name');

        $user = User::where('email', $email)->where('name', $Name)->first();

        if ($user) {
            return redirect()->back()->with('success', 'Akun di temukan. Verifikasi telah di kirim ke alamat email');
            // return redirect()->route('ccount.found')->with([
            //     'email' => $user->email,
            //     'name' => $user->name,
            //     'password' => $rawPassword,
            // ]);
        } else {
            return redirect()->back()->with('error', 'Akun tidak ditemukan. Silakan periksa email dan nama Anda.');
        }
    }

    public function authenticate (Request $request)
    {
        $user = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($user)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
 
        return back();
    }

    public function logout() {
        Auth::logout();

        return redirect('login')->with('success', 'You have been logged out.');
    }
}