@extends('layouts.dashboard')

@section('content')

@if ($errors->any())
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif

<div class="card shadow-sm p-4">

    <h4 class="mb-3">Tambah Berita</h4>

    <form action="{{ route('admin.berita.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label class="form-label">Judul Berita</label>
            <input type="text" name="judul" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Isi Berita</label>
            <textarea name="konten" rows="5" class="form-control" required></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Gambar Berita</label>
            <input type="file" name="gambar" class="form-control" required>
        </div>

        <button class="btn btn-success">Simpan</button>
        <a href="{{ route('admin.berita.index') }}" class="btn btn-secondary">Kembali</a>

    </form>

</div>

@endsection
