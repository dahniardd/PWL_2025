<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            // jika sudah login, maka redirect ke halaman home 
            return redirect('/');
        }
        return view('auth.login');
    }

    public function postlogin(Request $request)
    {
        try {
            if ($request->ajax() || $request->wantsJson()) {
                $validator = Validator::make($request->all(), [
                    'username' => 'required|min:4|max:20',
                    'password' => 'required|min:5|max:20'
                ]);

                if ($validator->fails()) {
                    return response()->json([
                        'status' => false,
                        'message' => 'Validasi gagal',
                        'msgField' => $validator->errors()
                    ]);
                }

                $credentials = $request->only('username', 'password');

                if (Auth::attempt($credentials)) {
                    return response()->json([
                        'status' => true,
                        'message' => 'Login Berhasil',
                        'redirect' => url('/')
                    ]);
                }

                return response()->json([
                    'status' => false,
                    'message' => 'Username atau Password salah',
                    'msgField' => [
                        'username' => ['Username atau Password salah'],
                        'password' => ['Username atau Password salah']
                    ]
                ]);
            }
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => 'Terjadi kesalahan server: ' . $th->getMessage()
            ]);
        }

        return redirect('/login');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }
}
