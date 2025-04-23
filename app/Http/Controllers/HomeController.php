<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');

        // Ambil data buku, jika ada pencarian maka filter berdasarkan nama buku
        $buku = Buku::when($search, function ($query) use ($search) {
            return $query->where('nama_buku', 'like', '%' . $search . '%');
        })->paginate(10);

        return view('home', compact('buku'));
    }
}
