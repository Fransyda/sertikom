@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Penerbit</h2>
    <form action="{{ route('penerbit.update', $penerbit->id_penerbit) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama_penerbit" class="form-label">Nama Penerbit</label>
            <input type="text" name="nama_penerbit" id="nama_penerbit" class="form-control" value="{{ old('nama_penerbit', $penerbit->nama_penerbit) }}">
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" name="alamat" id="alamat" class="form-control" value="{{ old('alamat', $penerbit->alamat) }}">
        </div>

        <div class="mb-3">
            <label for="kota" class="form-label">Kota</label>
            <input type="text" name="kota" id="kota" class="form-control" value="{{ old('kota', $penerbit->kota) }}">
        </div>

        <div class="mb-3">
            <label for="telepon" class="form-label">Telepon</label>
            <input type="text" name="telepon" id="telepon" class="form-control" value="{{ old('telepon', $penerbit->telepon) }}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
