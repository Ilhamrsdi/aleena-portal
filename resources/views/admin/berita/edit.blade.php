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

    <h4 class="mb-3">Edit Berita</h4>

   <form action="{{ route('admin.berita.update', $berita->slug) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('PUT')


<div class="mb-3">
<label class="form-label">Judul Berita</label>
<input type="text" name="judul" class="form-control" value="{{ old('judul', $berita->judul) }}" required>
</div>


<div class="mb-3">
<label class="form-label">Isi Berita</label>
<textarea name="konten" rows="6" class="form-control" required>{{ old('isi', $berita->konten) }}</textarea>
</div>


<div class="mb-3">
<label class="form-label">Gambar</label><br>
@if ($berita->gambar)
<img src="{{ asset('storage/' . $berita->gambar) }}" width="150" class="mb-2">
@endif
<input type="file" name="gambar" class="form-control">
<small class="text-muted">Kosongkan jika tidak ingin mengganti gambar</small>
</div>


<button type="submit" class="btn btn-primary">Update</button>
<a href="{{ route('admin.berita.index') }}" class="btn btn-secondary">Kembali</a>
</form>

</div>

@endsection
