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

    <h4 class="mb-3">Tambah Team</h4>

    <form action="{{ route('admin.team.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Position</label>
            <textarea name="position" rows="5" class="form-control" required></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Pohoto</label>
            <input type="file" name="photo" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Info</label>
            <input type="text" name="info" class="form-control" required>
        </div>

        <button class="btn btn-success">Simpan</button>
        <a href="{{ route('admin.team.index') }}" class="btn btn-secondary">Kembali</a>

    </form>

</div>

@endsection
