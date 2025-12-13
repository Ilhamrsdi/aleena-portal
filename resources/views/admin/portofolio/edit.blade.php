@extends('layouts.dashboard')
@section('content')

<div class="card shadow-sm p-4">
    <h4 class="mb-4">Edit Portofolio</h4>

    <form action="{{ route('admin.portofolio.update', $portofolio->id) }}" 
          method="POST" 
          enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Judul -->
        <div class="mb-3">
            <label class="form-label">Judul</label>
            <input type="text" 
                   name="judul" 
                   class="form-control @error('judul') is-invalid @enderror"
                   value="{{ old('judul', $portofolio->judul) }}">
            @error('judul')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Gambar Lama -->
        <div class="mb-3">
            <label class="form-label">Gambar Saat Ini</label><br>
            <img src="{{ asset('storage/' . $portofolio->photo) }}"
                 width="200"
                 style="border-radius:8px; object-fit:cover;">
        </div>

        <!-- Upload Gambar Baru -->
        <div class="mb-3">
            <label class="form-label">Ganti Gambar (opsional)</label>
            <input type="file" 
                   name="photo" 
                   class="form-control @error('photo') is-invalid @enderror">
            @error('photo')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="d-flex gap-2">
            <button class="btn btn-primary btn-sm">
                <i class="fa fa-save"></i> Update
            </button>

            <a href="{{ route('admin.portofolio.index') }}" 
               class="btn btn-secondary btn-sm">
                Kembali
            </a>
        </div>
    </form>
</div>

@endsection
