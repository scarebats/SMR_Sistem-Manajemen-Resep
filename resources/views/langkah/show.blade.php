@extends('adminlte::page')

@section('title', 'Detail Langkah')

@section('content_header')
    <h1>Detail Langkah</h1>
@stop

@section('content')
    <table class="table">
        <tr><th>Resep</th><td>{{ $langkah->resep->judul }}</td></tr>
        <tr><th>Urutan</th><td>{{ $langkah->urutan }}</td></tr>
        <tr><th>Deskripsi</th><td>{{ $langkah->deskripsi }}</td></tr>
    </table>
    <a href="{{ route('langkah.index') }}" class="btn btn-secondary">Kembali</a>
@stop
