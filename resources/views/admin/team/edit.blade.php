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
    <h4 class="mb-4">Edit Team</h4>

    <form action="{{ route('admin.team.update', $team->id) }}"
          method="POST"
          enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Nama -->
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text"
                   name="name"
                   class="form-control @error('name') is-invalid @enderror"
                   value="{{ old('name', $team->name) }}">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Posisi -->
        <div class="mb-3">
            <label class="form-label">Posisi</label>
            <input type="text"
                   name="position"
                   class="form-control @error('position') is-invalid @enderror"
                   value="{{ old('position', $team->position) }}">
            @error('position')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Foto Lama -->
        @if ($team->photo)
        <div class="mb-3">
            <label class="form-label">Foto Saat Ini</label><br>
            <img src="{{ asset('storage/' . $team->photo) }}"
                 width="200"
                 style="border-radius:8px; object-fit:cover;">
        </div>
        @endif

        <!-- Upload Foto Baru -->
        <div class="mb-3">
            <label class="form-label">Ganti Foto (opsional)</label>
            <input type="file"
                   name="photo"
                   class="form-control @error('photo') is-invalid @enderror">
            @error('photo')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Info -->
        <div class="mb-3">
            <label class="form-label">Info</label>
            <textarea name="info"
                      rows="4"
                      class="form-control @error('info') is-invalid @enderror">{{ old('info', $team->info) }}</textarea>
            @error('info')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="d-flex gap-2">
            <button class="btn btn-primary btn-sm">
                <i class="fa fa-save"></i> Update
            </button>

            <a href="{{ route('admin.team.index') }}"
               class="btn btn-secondary btn-sm">
                Kembali
            </a>
        </div>
    </form>
</div>

@endsection
