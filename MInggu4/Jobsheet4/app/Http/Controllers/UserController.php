<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        /*$data = [
            'level_id' => 2,
            'username' => 'manager_tiga',
            'nama' => 'Manager 3',
            'password' => Hash::make('12345')
        ];
        UserModel::create($data);*/

        //$user = UserModel::find(1);    // ambil data dari tabel m_user dengan id 1

        //$user = UserModel::where('level_id', 1)->first();    // ambil data dari tabel m_user dengan level_id 1
        
        //$user = UserModel::where('username', 'manager_tiga')->first();    // ambil data dari tabel m_user dengan username manager_tiga
        
        /*$user = UserModel::findOr(20, ['username', 'nama'], function () {
            abort(404);
        });*/

        //$user = UserModel::findOrFail(1); // ambil data dari tabel m_user dengan id 1

        //$user = UserModel::where('username', 'manager9')->firstOrFail();
        
        $jumlahPengguna = UserModel::where('level_id', 2)->count();
        return view('user', ['jumlahPengguna' => $jumlahPengguna]);

    }
}
