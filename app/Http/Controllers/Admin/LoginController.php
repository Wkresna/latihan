<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //mengarahkan ke form login di folder : resources\views\backoffice\pages\auth\login.blade.php 
    function index() {
        return view('backoffice.pages.auth.login', [
            'page_title' => 'Login Form'
        ]);
    }
    function login(Request $request) 
    {
        $data = User::where('username', $request->username)->first();
        $formdata = $request-> only(['username','password']);
        if ($data == null)
        {
            return redirect()->back()->with('error', 'username belum terdaftar');
        }
        if(Auth::attempt($formdata))
        {
            return redirect()->route('admin.school.index')->with('success', 'Login berhasil');            
        }
        return redirect()->back()->with('error', 'username dan password salah');
    }
    function logout()
    {
        Auth::logout();
        return redirect()->route('auth.index')->with('success', 'Logout berhasil'); 
    }
}
