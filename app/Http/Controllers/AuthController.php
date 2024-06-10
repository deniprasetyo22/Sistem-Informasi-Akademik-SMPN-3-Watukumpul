<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function proseslogin(Request $request)
    {
        $login = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($login)) {
            $request->session()->regenerate();
            return redirect()->intended('admin-dashboard');
        }

        Session::flash('status', 'failed');
        Session::flash('message', 'Email atau Password Salah !');

        return redirect('login');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('login');
    }

    // public function register()
    // {
    //     return view('register');
    // }

    // public function create(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'email' => 'required|unique:users',
    //         'password' => 'required|min:8'
    //     ], [
    //         'name.required' => 'nama wajib diisi',
    //         'email.required' => 'email wajib diisi',
    //         'email.unique' => 'email sudah terdaftar',
    //         'password.required' => 'password wajib diisi',
    //         'password.min' => 'password minimal 8 karakter'
    //     ]);

    //     $register = User::create([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'password' => Hash::make($request->password),
    //         'role_id' => '3'
    //     ]);

    //     Session::flash('register', 'success');
    //     Session::flash('message', 'Registrasi Berhasil !');

    //     Session::flash('status', 'failed');
    //     Session::flash('message', 'Email atau Password Salah !');

    //     return redirect('login');
    // }
}
