<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function auth(Request $request)
    {
       $credentials = $request->validate([


            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials))
        {
            $request->session()->regenerate();

            if(auth()->user()->role == 'admin'){
                return redirect()->intended('/dashboard');

            }

            // ddd(auth()->user()->username, auth()->user()->alamat);

            return redirect()->intended('dashboard');

        }

        return back()->with('login_error', "Failed Login");
 
    }

    public function home()
    {
        return view('dashboard.home');
    }

    public function tambahpeserta()
    {
        return view('dashboard.tambah-peserta');
    }


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
