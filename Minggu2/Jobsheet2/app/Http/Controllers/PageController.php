<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Welcome!';
    }
    public function about() {
        return "Nama: Dahniar Davina <br> NIM: 2341760023";
    }
    public function articles($id) {
        return "Halaman Artikel dengan ID " . $id;
    }
}
 