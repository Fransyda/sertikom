@extends('layouts.app')

@section('content')
<div class="container">
    <div class="x_panel">
        <div class="x_title">
            <h2>Tambah Buku <small>Form input data buku baru</small></h2>
            <div class="clearfix"></div>
        </div>

        <div class="x_content">
            <form action="{{ route('buku.store') }}" method="POST">
                @csrf

                <div class="row mb-3">
                    <label class="col-md-3 col-form-label">ID Buku</label>
                    <div class="col-md-9">
                        <input type="text" name="id_buku" class="form-control" placeholder="Masukkan ID Buku">
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-md-3 col-form-label">Kategori</label>
                    <div class="col-md-9">
                        <input type="text" name="kategori" class="form-control" placeholder="Contoh: Novel, Edukasi">
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-md-3 col-form-label">Nama Buku</label>
                    <div class="col-md-9">
                        <input type="text" name="nama_buku" class="form-control" placeholder="Masukkan Nama Buku">
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-md-3 col-form-label">Harga</label>
                    <div class="col-md-9">
                        <input type="number" name="harga" class="form-control" placeholder="Masukkan Harga Buku">
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-md-3 col-form-label">Stok</label>
                    <div class="col-md-9">
                        <input type="number" name="stok" class="form-control" placeholder="Jumlah Stok Buku">
                    </div>
                </div>

                <div class="row mb-4">
                    <label class="col-md-3 col-form-label">Nama Penerbit</label>
                    <div class="col-md-9">
                        <select name="nama_penerbit" class="form-control">
                            <option value="">-- Pilih Penerbit --</option>
                            @foreach ($penerbit as $p)
                                <option value="{{ $p->nama_penerbit }}">{{ $p->nama_penerbit }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
