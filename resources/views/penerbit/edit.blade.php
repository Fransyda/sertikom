@extends('layouts.app')

@section('content')
<div class="container">
    <div class="x_panel">
        <div class="x_title">
            <h2>Edit Penerbit <small>Ubah data penerbit yang sudah ada</small></h2>
            <div class="clearfix"></div>
        </div>

        <div class="x_content">
            <form action="{{ route('penerbit.update', $penerbit->kd_penerbit) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- ID Penerbit -->
                <div class="mb-3">
                    <label class="form-label">ID Penerbit</label>
                    <input type="text" name="id_penerbit" class="form-control" value="{{ old('id_penerbit', $penerbit->id_penerbit) }}">
                </div>

                <!-- Nama Penerbit -->
                <div class="mb-3">
                    <label class="form-label">Nama Penerbit</label>
                    <input type="text" name="nama_penerbit" class="form-control" value="{{ old('nama_penerbit', $penerbit->nama_penerbit) }}">
                </div>

                <!-- Alamat -->
                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <input type="text" name="alamat" class="form-control" value="{{ old('alamat', $penerbit->alamat) }}">
                </div>

                <!-- Kota -->
                <div class="mb-3">
                    <label class="form-label">Kota</label>
                    <input type="text" name="kota" class="form-control" value="{{ old('kota', $penerbit->kota) }}">
                </div>

                <!-- Telepon -->
                <div class="mb-3">
                    <label class="form-label">Telepon</label>
                    <input type="text" name="telepon" class="form-control" value="{{ old('telepon', $penerbit->telepon) }}">
                </div>

                <!-- Tombol Update -->
                <button class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
