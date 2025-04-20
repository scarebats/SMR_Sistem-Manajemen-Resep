@extends('adminlte::page')

@section('title', 'Edit Langkah')

@section('content_header')
    <h1>Edit Langkah</h1>
@stop

@section('content')
    <form action="{{ route('langkah.update', $langkah->id) }}" method="POST">
        @csrf @method('PUT')

        <div class="mb-3">
            <label for="resep_id">Resep</label>
            <select name="resep_id" class="form-control">
                @foreach($reseps as $resep)
                    <option value="{{ $resep->id }}" {{ $langkah->resep_id == $resep->id ? 'selected' : '' }}>
                        {{ $resep->judul }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="urutan">Urutan</label>
            <input type="number" name="urutan" class="form-control" value="{{ $langkah->urutan }}" required>
        </div>

        <div class="mb-3">
            <label for="deskripsi">Deskripsi Langkah</label>
            <textarea name="deskripsi" class="form-control" required>{{ $langkah->deskripsi }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Simpan Perubahan</button>
    </form>
@stop
