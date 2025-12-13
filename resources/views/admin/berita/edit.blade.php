@extends('layouts.dashboard')

@section('content')

<div class="card shadow-sm p-4">

    <h4 class="mb-3">Edit Berita</h4>

    <form action="{{ route('admin.berita.update', $berita->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Judul Berita</label>
            <input type="text" name="judul" class="form-control" 
                   value="{{ old('judul', $berita->judul) }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Slug Berita</label>
            <input type="text" name="slug" class="form-control" 
                   value="{{ old('slug', $berita->slug) }}" readonly required>
        </div>

        <div class="mb-3">
            <label class="form-label">Isi Berita</label>
            <textarea name="isi" rows="5" class="form-control" required>{{ old('isi', $berita->isi) }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Gambar Berita</label>
            <input type="file" name="gambar" class="form-control">
            @if($berita->gambar)
                <img src="{{ asset('storage/'.$berita->gambar) }}" 
                     width="100" height="70" 
                     style="object-fit: cover; border-radius: 4px; margin-top: 5px;">
            @endif
        </div>

        <button class="btn btn-success">Update</button>
        <a href="{{ route('admin.berita.index') }}" class="btn btn-secondary">Kembali</a>

    </form>

</div>

@endsection

@section('scripts')
<script>
    const judulInput = document.querySelector('input[name="judul"]');
    const slugInput  = document.querySelector('input[name="slug"]');

    judulInput.addEventListener('keyup', function () {
        let slug = judulInput.value
            .toLowerCase()
            .replace(/[^a-z0-9\s-]/g, '') // hapus karakter aneh
            .replace(/\s+/g, '-')         // spasi jadi -
            .replace(/-+/g, '-');         // rapikan -
        slugInput.value = slug;
    });
</script>
@endsection
