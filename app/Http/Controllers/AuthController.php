<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if ($user) {
            if ($user->level == 'admin') {
                return redirect()->intended('dashboard');
            } else if ($user->level == 'user') {
                return redirect('/');
            }
        }

        return view('back.auth.login');
    }

    public function auth(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credential = $request->only('email', 'password');

        if (Auth::attempt($credential)) {
            $user = Auth::user();

            if ($user->level == 'admin') {
                return redirect()->intended('dashboard');
            } elseif ($user->level == 'user') {
                return redirect('/');
            }
            return redirect()->intended('/');
        }

        return redirect('login')->withInput()->withErrors(['login_gagal' => 'email & password tidak sesuai']);
    }

    public function register()
    {
        return view('back.auth.register');
    }

    public function auth_register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            // 'level' => 'required',
            'whatsapp'  => 'required',
            'institution'  => 'required',
            'position'  => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('register')->withErrors($validator)->withInput();
        }

        $request['level'] = 'user';
        $request['password'] =  bcrypt($request->password);

        User::create($request->all());

        return redirect()->route('login');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
