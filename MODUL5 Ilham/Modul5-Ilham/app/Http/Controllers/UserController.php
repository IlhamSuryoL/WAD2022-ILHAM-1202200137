<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register()
    {
        $data['title'] = 'register';
        return view('user/register', $data);
    }
    public function register_action(Request $request)
    {
        $request->validate([
            'email' => 'required|unique:users',
            'nama' => 'required',
            'nohp' => 'required',
            'sandi' => 'required',
            'sandikonfirm' => 'required|same:sandi',
        ]);
        
        $user = new User([
            'email' => $request->email,
            'name' => $request->nama,
            'no_hp' => $request->nohp,
            'password' => Hash::make($request->sandi),
        ]);
        $user->save();

        return redirect()->route('login')->with('success', 'Registration success. Please login!');
    }


    public function login()
    {
        $data['title'] = 'login';
        return view('user/login', $data);
    }

    public function login_action(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'password' => 'Wrong username or password',
        ]);
    }

   
}

