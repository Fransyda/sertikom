@extends('layouts.app')

@section('content')
<div class="container">
    <div class="x_panel">
        <div class="x_title">
            <h2>Laporan Buku yang Perlu Segera Dibeli <small>Buku dengan stok paling sedikit</small></h2>
            <div class="clearfix"></div>
        </div>

        <div class="x_content">
            <p>Menampilkan buku dengan stok paling sedikit (stok minimum).</p>

            <table class="table table-bordered bg-white text-black">
                <thead>
                    <tr>
                        <th>Judul Buku</th>
                        <th>Nama Penerbit</th>
                        <th>Stok</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($buku as $item)
                    <tr>
                        <td>{{ $item->nama_buku }}</td>
                        <td>{{ $item->nama_penerbit }}</td>
                        <td>{{ $item->stok }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3" class="text-center">Tidak ada data buku.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
