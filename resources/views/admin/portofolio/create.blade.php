@extends('layouts.dashboard')

@section('content')

<div class="card shadow-sm p-4">

    <h4 class="mb-3">Tambah Portofolio dan Pencapaian</h4>

    <form action="{{ route('admin.portofolio.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label class="form-label">Judul Portofolio</label>
            <input type="text" name="judul" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Dokumentasi</label>
            <input type="file" name="photo" class="form-control" required>
        </div>

        <button class="btn btn-success">Simpan</button>
        <a href="{{ route('admin.portofolio.index') }}" class="btn btn-secondary">Kembali</a>

    </form>

</div>

@endsection
