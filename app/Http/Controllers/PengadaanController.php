<?php

namespace App\Http\Controllers;
use App\Models\Buku;
use Illuminate\Http\Request;

class PengadaanController extends Controller
{
    public function bukuMinimum()
    {
        $minStok = Buku::min('stok');

        $buku = Buku::where('stok', $minStok)->get();

        return view('pengadaan', compact('buku'));
    }

}
