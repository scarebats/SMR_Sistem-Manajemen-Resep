@extends('layouts.template')

@section('content')
<div class="container">
    <h1>{{ $resep->judul }}</h1>
    <p>{{ $resep->deskripsi }}</p>

    <hr>

    <h4>Bahan-Bahan</h4>
    <ul>
        @forelse ($resep->bahan as $bahan)
            <li>{{ $bahan->jumlah }} - {{ $bahan->nama_bahan }}</li>
        @empty
            <li>Tidak ada bahan</li>
        @endforelse
    </ul>

    <hr>

    <h4>Langkah-Langkah</h4>
    <ol>
        @forelse ($resep->langkah as $langkah)
            <li>{{ $langkah->deskripsi }}</li>
        @empty
            <li>Tidak ada langkah</li>
        @endforelse
    </ol>

    <a href="{{ route('resep.index') }}" class="btn btn-secondary mt-3">Kembali</a>
</div>
@endsection
