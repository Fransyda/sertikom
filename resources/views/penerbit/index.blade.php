@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="x_panel">
            <div class="x_title">
                <h2>Daftar Penerbit <small>List semua data penerbit</small></h2>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> -->
                    </div>
                @endif

                <!-- Tombol Tambah Penerbit -->
                <div class="mb-3">
                    <a href="{{ route('penerbit.create') }}" class="btn btn-success">+ Tambah Penerbit</a>
                </div>

                <!-- Tabel Data Penerbit -->
                <div class="table-responsive">
                    <table class="table table-striped jambo_table">
                        <thead>
                            <tr class="headings">
                                <th>ID Penerbit</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Kota</th>
                                <th>Telepon</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($penerbit as $data)
                                <tr>
                                    <td>{{ $data->id_penerbit }}</td>
                                    <td>{{ $data->nama_penerbit }}</td>
                                    <td>{{ $data->alamat }}</td>
                                    <td>{{ $data->kota }}</td>
                                    <td>{{ $data->telepon }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('penerbit.edit', $data->kd_penerbit) }}"
                                            class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('penerbit.destroy', $data->kd_penerbit) }}" method="POST"
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
                                    <td colspan="6" class="text-center">Tidak ada data penerbit.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection