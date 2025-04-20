@extends('adminlte::page')

@section('title', 'Tambah Langkah')

@section('content_header')
    <h1>Tambah Langkah</h1>
@stop

@section('content')
    <form action="{{ route('langkah.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="resep_id">Resep</label>
            <select name="resep_id" class="form-control">
                @foreach($reseps as $resep)
                    <option value="{{ $resep->id }}">{{ $resep->judul }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="urutan">Urutan</label>
            <input type="number" name="urutan" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="deskripsi">Deskripsi Langkah</label>
            <textarea name="deskripsi" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
@stop
