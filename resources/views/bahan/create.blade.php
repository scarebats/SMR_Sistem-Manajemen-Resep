@extends('adminlte::page')

@section('title', $title)

@section('content_header')
    <h1>{{ $title }}</h1>
@stop

@section('content')
    <form action="{{ route('bahan.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="resep_id">Resep</label>
            <select name="resep_id" class="form-control">
                @foreach($reseps as $resep)
                    <option value="{{ $resep->id }}">
                        {{ $resep->judul }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="nama_bahan">Nama Bahan</label>
            <input type="text" name="nama_bahan" class="form-control" value="{{ old('nama_bahan') }}" required>
        </div>

        <div class="mb-3">
            <label for="jumlah">Jumlah</label>
            <input type="text" name="jumlah" class="form-control" value="{{ old('jumlah') }}">
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
@stop
