@extends('layouts.template')

@section('content')
<div class="container">
    <h1>{{ $title }}</h1>
    <a href="{{ route('resep.create') }}" class="btn btn-primary mb-3">Tambah Resep</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card">
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($reseps as $key => $resep)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $resep->judul }}</td>
                        <td>{{ Str::limit($resep->deskripsi, 50) }}</td>
                        <td>
                            <a href="{{ route('resep.show', $resep->id) }}" class="btn btn-info btn-sm">Detail</a>
                            <a href="{{ route('resep.edit', $resep->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('resep.destroy', $resep->id) }}" method="POST" style="display:inline-block">
                                @csrf @method('DELETE')
                                <button onclick="return confirm('Yakin hapus?')" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
