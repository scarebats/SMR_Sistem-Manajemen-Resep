@extends('adminlte::page')

@section('title', $title)

@section('content_header')
    <h1>{{ $title }}</h1>
@stop

@section('content')
    <table class="table">
        <tr><th>Resep</th><td>{{ $bahan->resep->judul }}</td></tr>
        <tr><th>Nama Bahan</th><td>{{ $bahan->nama_bahan }}</td></tr>
        <tr><th>Jumlah</th><td>{{ $bahan->jumlah }}</td></tr>
    </table>
    <a href="{{ route('bahan.index') }}" class="btn btn-secondary">Kembali</a>
@stop
