<?php

namespace App\Http\Controllers;

use App\Models\Item; //import model Item
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index() //menampilkan semua data item
    {
        $items = Item::all(); //mengambil semua data item
        return view('items.index', compact('items')); //menampilkan data item
    }

    public function create() //menampilkan form untuk membuat item baru
    {
        return view('items.create'); //menampilkan form create item
    }

    public function store(Request $request) //menyimpan item baru
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]); //validasi inputan

        //hanya memasukkan atribut yang diizinkan
        Item::create($request->only(['name', 'description']));
        return redirect()->route('items.index')->with('success', 'Item created successfully.');
    }

    public function show(Item $item) //menampilkan detail item
    {
        return view('items.show', compact('item')); //menampilkan detail item
    }

    public function edit(Item $item) //menampilkan form untuk mengedit item
    {
        return view('items.edit', compact('item')); //menampilkan form edit item
    }

    public function update(Request $request, Item $item) //mengupdate item
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);//validasi inputan

        $item->update($request->only(['name', 'description'])); //hanya memasukkan atribut yang diizinkan
        return redirect()->route('items.index')->with('success', 'Item updated successfully.'); //redirect ke halaman index
    }

    public function destroy(Item $item) //menghapus item
    {
        $item->delete(); //menghapus item
        return redirect()->route('items.index')->with('success', 'Item deleted successfully.'); //redirect ke halaman index
    }
}