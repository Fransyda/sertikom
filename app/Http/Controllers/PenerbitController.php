<?php

namespace App\Http\Controllers;

use App\Models\Penerbit;
use Illuminate\Http\Request;

class PenerbitController extends Controller
{
    public function index()
    {
        $penerbit = Penerbit::all();
        return view('penerbit.index', compact('penerbit'));
    }

    public function create()
    {
        return view('penerbit.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_penerbit' => 'required|string',
            'nama_penerbit' => 'required|string|max:255',
            'alamat' => 'required|string',
            'kota' => 'required|string',
            'telepon' => 'required|string',
        ]);

        Penerbit::create($request->all());

        return redirect()->route('penerbit.index')->with('success', 'Data penerbit berhasil ditambahkan.');
    }

    public function show(Penerbit $penerbit)
    {
        return view('penerbit.show', compact('penerbit'));
    }

    public function edit(Penerbit $penerbit)
    {
        return view('penerbit.edit', compact('penerbit'));
    }

    public function update(Request $request, Penerbit $penerbit)
    {
        $request->validate([
            'id_penerbit' => 'required|string',
            'nama_penerbit' => 'required|string|max:255',
            'alamat' => 'required|string',
            'kota' => 'required|string',
            'telepon' => 'required|string',
        ]);

        $penerbit->update($request->all());

        return redirect()->route('penerbit.index')->with('success', 'Data penerbit berhasil diperbarui.');
    }

    public function destroy(Penerbit $penerbit)
    {
        $penerbit->delete();

        return redirect()->route('penerbit.index')->with('success', 'Data penerbit berhasil dihapus.');
    }
}
