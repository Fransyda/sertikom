@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Daftar Penerbit</h2>
    <a href="{{ route('penerbit.create') }}" class="btn btn-primary mb-3">Tambah Penerbit</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered bg-white text-black">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Kota</th>
                <th>Telepon</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($penerbit as $data)
            <tr>
                <td>{{ $data->nama_penerbit }}</td>
                <td>{{ $data->alamat }}</td>
                <td>{{ $data->kota }}</td>
                <td>{{ $data->telepon }}</td>
                <td>
                    <a href="{{ route('penerbit.edit', $data->id_penerbit) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('penerbit.destroy', $data->id_penerbit) }}" method="POST" style="display:inline-block;">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
