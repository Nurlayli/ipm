<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function inputproses(Request $request){
        $validatedData = $request->validate([
            'name' => 'required',
            // 'username' => ['required','min:3','max:255','unique:users'],
            'asal_sekolah' => 'required',
            'alamat' => 'required',
            'nohp' => 'required',
            'email' => 'required | unique:users',
            // 'password' => 'required',
            'role' => 'required',

        ]);
        $validatedData['username'] = 'IPM-'.Str::random(5);
        $validatedData['password']=Hash::make('ipmmuarapadang');

        User::create($validatedData);

        return redirect('/tambah-peserta')->with('succes', 'Peserta berhasil ditambahkan');
      
    }
}

