@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Penerbit</h2>
    <form action="{{ route('penerbit.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="id_penerbit" class="form-label">ID Penerbit</label>
            <input type="text" name="id_penerbit" id="id_penerbit" class="form-control" value="{{ old('id_penerbit') }}">
        </div>
        <div class="mb-3">
            <label for="nama_penerbit" class="form-label">Nama Penerbit</label>
            <input type="text" name="nama_penerbit" id="nama_penerbit" class="form-control" value="{{ old('nama_penerbit') }}">
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" name="alamat" id="alamat" class="form-control" value="{{ old('alamat') }}">
        </div>

        <div class="mb-3">
            <label for="kota" class="form-label">Kota</label>
            <input type="text" name="kota" id="kota" class="form-control" value="{{ old('kota') }}">
        </div>

        <div class="mb-3">
            <label for="telepon" class="form-label">Telepon</label>
            <input type="text" name="telepon" id="telepon" class="form-control" value="{{ old('telepon') }}">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
