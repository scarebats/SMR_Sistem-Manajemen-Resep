@extends('layouts.template')

@section('content')
<div class="container">
    <h1>{{ $title }}</h1>

    <form action="{{ route('resep.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="judul" class="form-label">Judul Resep</label>
            <input type="text" name="judul" id="judul" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" class="form-control" rows="4"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('resep.index') }}" class="btn btn-secondary">Kembali</a>
    </form>

    <script>
        document.getElementById('formCreate').addEventListener('submit', function (e) {
            const judul = document.getElementById('judul').value.trim();
            if (judul === '') {
                alert('Judul tidak boleh kosong!');
                e.preventDefault();
            }
        });
    </script>
</div>
@endsection
