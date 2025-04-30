@extends('layouts.app')

@section('content')
<div class="container">
    <div class="x_panel">
        <div class="x_title">
            <h2>Tambah Penerbit <small>Form input data penerbit baru</small></h2>
            <div class="clearfix"></div>
        </div>

        <div class="x_content">
            <form action="{{ route('penerbit.store') }}" method="POST">
                @csrf

                <!-- ID Penerbit -->
                <div class="row mb-3">
                    <label class="col-md-3 col-form-label">ID Penerbit</label>
                    <div class="col-md-9">
                        <input type="text" name="id_penerbit" class="form-control" placeholder="Masukkan ID Penerbit" value="{{ old('id_penerbit') }}">
                    </div>
                </div>

                <!-- Nama Penerbit -->
                <div class="row mb-3">
                    <label class="col-md-3 col-form-label">Nama Penerbit</label>
                    <div class="col-md-9">
                        <input type="text" name="nama_penerbit" class="form-control" placeholder="Masukkan Nama Penerbit" value="{{ old('nama_penerbit') }}">
                    </div>
                </div>

                <!-- Alamat -->
                <div class="row mb-3">
                    <label class="col-md-3 col-form-label">Alamat</label>
                    <div class="col-md-9">
                        <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat" value="{{ old('alamat') }}">
                    </div>
                </div>

                <!-- Kota -->
                <div class="row mb-3">
                    <label class="col-md-3 col-form-label">Kota</label>
                    <div class="col-md-9">
                        <input type="text" name="kota" class="form-control" placeholder="Masukkan Kota" value="{{ old('kota') }}">
                    </div>
                </div>

                <!-- Telepon -->
                <div class="row mb-3">
                    <label class="col-md-3 col-form-label">Telepon</label>
                    <div class="col-md-9">
                        <input type="text" name="telepon" class="form-control" placeholder="Masukkan Telepon" value="{{ old('telepon') }}">
                    </div>
                </div>

                <!-- Tombol Simpan -->
                <div class="text-end">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
