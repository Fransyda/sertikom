@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Daftar Buku</h2>

        <!-- Form Pencarian -->
        <form action="{{ route('home') }}" method="GET" class="mb-3">
            <div class="row">
                <div class="col-md-8">
                    <input type="text" name="search" class="form-control" placeholder="Cari Buku berdasarkan Nama"
                        value="{{ request('search') }}">
                </div>
                <div class="col-md-4">
                    <button class="btn btn-primary w-100">Cari</button>
                </div>
            </div>
        </form>

        <!-- Tabel Daftar Buku -->
        <table class="table table-bordered bg-white text-black">
            <thead>
                <tr>
                    <th>ID Buku</th>
                    <th>Kategori</th>
                    <th>Nama Buku</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Nama Penerbit</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($buku as $item)
                    <tr>
                        <td>{{ $item->id_buku }}</td>
                        <td>{{ $item->kategori }}</td>
                        <td>{{ $item->nama_buku }}</td>
                        <td>Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
                        <td>{{ $item->stok }}</td>
                        <td>{{ $item->nama_penerbit }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Pagination -->
        {{ $buku->links() }}
    </div>
@endsection