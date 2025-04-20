@extends('layouts.template')

@section('content')
<div class="container">
    <h1>{{ $title }}</h1>

    <form id="formEdit" action="{{ route('resep.update', $resep->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="judul" class="form-label">Judul Resep</label>
            <input type="text" name="judul" id="judul" class="form-control" value="{{ old('judul', $resep->judul) }}" required>
        </div>

        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" class="form-control" rows="4">{{ old('deskripsi', $resep->deskripsi) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Perbarui</button>
        <a href="{{ route('resep.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<script>
    document.getElementById('formEdit').addEventListener('submit', function (e) {
        const judul = document.getElementById('judul').value.trim();
        if (judul === '') {
            alert('Judul tidak boleh kosong!');
            e.preventDefault();
        }
    });
</script>
@endsection
