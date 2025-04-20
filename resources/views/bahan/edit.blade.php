@extends('adminlte::page')

@section('title', $title)

@section('content_header')
    <h1>{{ $title }}</h1>
@stop

@section('content')
    <form action="{{ route('bahan.update', $bahan->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="resep_id">Resep</label>
            <select name="resep_id" class="form-control">
                @foreach($reseps as $resep)
                    <option value="{{ $resep->id }}" {{ $bahan->resep_id == $resep->id ? 'selected' : '' }}>
                        {{ $resep->judul }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="nama_bahan">Nama Bahan</label>
            <input type="text" name="nama_bahan" class="form-control" value="{{ $bahan->nama_bahan }}" required>
        </div>

        <div class="mb-3">
            <label for="jumlah">Jumlah</label>
            <input type="text" name="jumlah" class="form-control" value="{{ $bahan->jumlah }}">
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
@stop
