@extends('adminlte::page')

@section('title', $title)

@section('content_header')
    <h1>{{ $title }}</h1>
@stop

@section('content')
    <a href="{{ route('bahan.create') }}" class="btn btn-primary mb-3">Tambah Bahan</a>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Resep</th>
                <th>Nama Bahan</th>
                <th>Jumlah</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bahans as $bahan)
                <tr>
                    <td>{{ $bahan->resep->judul }}</td>
                    <td>{{ $bahan->nama_bahan }}</td>
                    <td>{{ $bahan->jumlah }}</td>
                    <td>
                        <a href="{{ route('bahan.show', $bahan->id) }}" class="btn btn-info btn-sm">Detail</a>
                        <a href="{{ route('bahan.edit', $bahan->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('bahan.destroy', $bahan->id) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop
