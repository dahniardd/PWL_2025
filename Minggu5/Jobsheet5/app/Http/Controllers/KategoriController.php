<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriModel;
use App\DataTables\KategoriDataTable;

class KategoriController extends Controller
{
    public function index(KategoriDataTable $dataTable)
    {
        return $dataTable->render('kategori.index');
    }
    public function create()
    {
        return view('kategori.create');
    }
    public function store(Request $request)
    {
        KategoriModel::create([
            'kategori_kode' => $request->kodeKategori,
            'kategori_nama' => $request->namaKategori,
        ]);
        return redirect('/kategori');
    }
    public function edit($id)
     {
         $data = KategoriModel::findOrFail($id); 
         return view('kategori.edit', ['kategori' => $data]); 
     }
 
    public function update(Request $request, $id)
    {
         // Validasi input
        $request->validate([
            'kodeKategori' => 'required',
            'namaKategori' => 'required'
        ]);
 
         // Cari data berdasarkan ID
        $kategori = KategoriModel::findOrFail($id);
         
         // Update data
        $kategori->kategori_kode = $request->kodeKategori;
        $kategori->kategori_nama = $request->namaKategori;
         
        $kategori->save();
 
        return redirect('/kategori');
    }
    public function delete($id){
        KategoriModel::where('kategori_id',$id)->delete();
        return redirect('/kategori');
    }
}