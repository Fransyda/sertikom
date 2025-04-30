@extends('layouts.app')

@section('content')
<div class="container">
    <div class="x_panel">
        <div class="x_title">
            <h2>Edit Buku <small>Ubah data buku yang sudah ada</small></h2>
            <div class="clearfix"></div>
        </div>

        <div class="x_content">
            <form action="{{ route('buku.update', $buku->kd_buku) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">ID Buku</label>
                    <input type="text" name="id_buku" class="form-control" value="{{ old('id_buku', $buku->id_buku) }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Kategori</label>
                    <input type="text" name="kategori" class="form-control" value="{{ old('kategori', $buku->kategori) }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Buku</label>
                    <input type="text" name="nama_buku" class="form-control" value="{{ old('nama_buku', $buku->nama_buku) }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Harga</label>
                    <input type="number" name="harga" class="form-control" value="{{ old('harga', $buku->harga) }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Stok</label>
                    <input type="number" name="stok" class="form-control" value="{{ old('stok', $buku->stok) }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Penerbit</label>
                    <select name="nama_penerbit" class="form-control">
                        <option value="">-- Pilih Penerbit --</option>
                        @foreach ($penerbit as $p)
                            <option value="{{ $p->nama_penerbit }}" {{ old('nama_penerbit', $buku->nama_penerbit) == $p->nama_penerbit ? 'selected' : '' }}>
                                {{ $p->nama_penerbit }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <button class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
