<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Method untuk menampilkan halaman profil pengguna
    public function show($id, $name)
    {
        return view('user.profil', compact('id', 'name')); // Mengirim data ID dan Nama ke view profile.blade.php
    }
}
