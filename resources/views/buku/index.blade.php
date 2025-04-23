@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Data Buku</h2>
        <a href="{{ route('buku.create') }}" class="btn btn-success mb-3">Tambah Buku</a>

        <table class="table table-bordered bg-white text-black">
            <thead>
                <tr>
                    <th>ID Buku</th>
                    <th>Kategori</th>
                    <th>Nama Buku</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Nama Penerbit</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($buku as $item)
                    <tr>
                        <td>{{ $item->id_buku }}</td>
                        <td>{{ $item->kategori }}</td>
                        <td>{{ $item->nama_buku }}</td>
                        <td>{{ number_format($item->harga, 0, ',', '.') }}</td>
                        <td>{{ $item->stok }}</td>
                        <td>{{ $item->nama_penerbit }}</td>
                        <td>
                            <a href="{{ route('buku.edit', $item->kd_buku) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('buku.destroy', $item->kd_buku) }}" method="POST"
                                style="display:inline-block;">
                                @csrf @method('DELETE')
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection