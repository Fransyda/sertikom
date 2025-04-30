@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="x_panel">
            <div class="x_title">
                <h2>Data Buku <small>Kelola data buku yang tersedia</small></h2>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> -->
                    </div>
                @endif
                <!-- Tombol Tambah Buku -->
                <div class="mb-3">
                    <a href="{{ route('buku.create') }}" class="btn btn-success">+ Tambah Buku</a>
                </div>

                <!-- Tabel Data Buku -->
                <div class="table-responsive">
                    <table class="table table-striped jambo_table">
                        <thead>
                            <tr class="headings">
                                <th>ID Buku</th>
                                <th>Kategori</th>
                                <th>Nama Buku</th>
                                <th>Harga</th>
                                <th>Stok</th>
                                <th>Nama Penerbit</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($buku as $item)
                                <tr>
                                    <td>{{ $item->id_buku }}</td>
                                    <td>{{ $item->kategori }}</td>
                                    <td>{{ $item->nama_buku }}</td>
                                    <td>Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
                                    <td>{{ $item->stok }}</td>
                                    <td>{{ $item->nama_penerbit }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('buku.edit', $item->kd_buku) }}"
                                            class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('buku.destroy', $item->kd_buku) }}" method="POST"
                                            style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm"
                                                onclick="return confirm('Yakin hapus?')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">Tidak ada data buku.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection