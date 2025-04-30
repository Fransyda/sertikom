<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Penerbit;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $buku = Buku::all();
        return view('buku.index', compact('buku'));
    }

    public function create()
    {
        $penerbit = Penerbit::all();
        return view('buku.create', compact('penerbit'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_buku' => 'required',
            'kategori' => 'required',
            'nama_buku' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
            'nama_penerbit' => 'required',
        ]);

        Buku::create($request->all());

        return redirect()->route('buku.index')->with('success', 'Data buku berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $buku = Buku::findOrFail($id);
        $penerbit = Penerbit::all();
        return view('buku.edit', compact('buku', 'penerbit'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_buku' => 'required',
            'kategori' => 'required',
            'nama_buku' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
            'nama_penerbit' => 'required',
        ]);

        $buku = Buku::findOrFail($id);
        $buku->update($request->all());

        return redirect()->route('buku.index')->with('success', 'Data buku berhasil diupdate.');
    }

    public function destroy($id)
    {
        $buku = Buku::findOrFail($id);
        $buku->delete();

        return redirect()->route('buku.index')->with('success', 'Data buku berhasil kdihapus.');
    }
}
