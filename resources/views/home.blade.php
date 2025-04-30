@extends('layouts.app')

@section('content')
<div class="container">
    <div class="x_panel">
        <div class="x_title">
            <h2>Daftar Buku <small>List semua buku tersedia</small></h2>
            <div class="clearfix"></div>
        </div>

        <div class="x_content">
            <!-- Form Pencarian -->
            <form action="{{ route('home') }}" method="GET" class="mb-4">
                <div class="row">
                    <div class="col-md-8 mb-2 mb-md-0">
                        <input type="text" name="search" class="form-control" placeholder="Cari Buku berdasarkan Nama"
                            value="{{ request('search') }}">
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-primary w-100">Cari</button>
                    </div>
                </div>
            </form>

            <!-- Tabel Daftar Buku -->
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
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">Tidak ada buku ditemukan.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="d-flex justify-content-center">
                {{ $buku->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
