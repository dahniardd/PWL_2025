<?php

namespace App\Http\Controllers;

use App\Models\UserModel; // Gunakan UserModel
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            // Jika sudah login, redirect ke halaman home
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

    public function register()
    {
        return view('auth.register');
    }

    public function postregister(Request $request)
    {
        try {
            if ($request->ajax() || $request->wantsJson()) {
                $validator = Validator::make($request->all(), [
                    'username' => 'required|min:4|max:20|unique:m_user,username', // Sesuaikan dengan tabel m_user
                    'nama' => 'required|min:3|max:50',
                    'password' => 'required|min:5|max:20|confirmed'
                ]);

                if ($validator->fails()) {
                    return response()->json([
                        'status' => false,
                        'message' => 'Validasi gagal',
                        'msgField' => $validator->errors()
                    ]);
                }

                // Simpan data pengguna baru
                UserModel::create([
                    'username' => $request->username,
                    'nama' => $request->nama,
                    'password' => $request->password, // Otomatis di-hash karena casting di model
                    'level_id' => 2, // Misalnya, level default untuk pengguna baru (sesuaikan dengan ID level)
                ]);

                return response()->json([
                    'status' => true,
                    'message' => 'Registrasi Berhasil! Silakan login.',
                    'redirect' => url('/login')
                ]);
            }
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => 'Terjadi kesalahan server: ' . $th->getMessage()
            ]);
        }

        return redirect('/register');
    }
}