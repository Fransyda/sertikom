@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Tambah Buku</h2>
        <form action="{{ route('buku.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>ID Buku</label>
                <input type="text" name="id_buku" class="form-control">
            </div>
            <div class="mb-3">
                <label>Kategori</label>
                <input type="text" name="kategori" class="form-control">
            </div>
            <div class="mb-3">
                <label>Nama Buku</label>
                <input type="text" name="nama_buku" class="form-control">
            </div>
            <div class="mb-3">
                <label>Harga</label>
                <input type="number" name="harga" class="form-control">
            </div>
            <div class="mb-3">
                <label>Stok</label>
                <input type="number" name="stok" class="form-control">
            </div>
            <div class="mb-3">
                <label>Nama Penerbit</label>
                <select name="nama_penerbit" class="form-control">
                    <option value="">-- Pilih Penerbit --</option>
                    @foreach ($penerbit as $p)
                        <option value="{{ $p->nama_penerbit }}">{{ $p->nama_penerbit }}</option>
                    @endforeach
                </select>
            </div>
            <button class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection