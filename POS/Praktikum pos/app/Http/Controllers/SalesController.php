<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesController extends Controller
{
    // Method untuk menampilkan halaman penjualan
    public function index()
    {
        return view('sales.index'); // Mengembalikan tampilan index.blade.php di folder sales
    }
}
