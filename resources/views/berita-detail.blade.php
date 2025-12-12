@extends('layouts.main')

@section('content')
<section class="section-detail-berita">
    <div class="container">

        <h1 class="detail-title">{{ $berita->judul }}</h1>

       
    <img src="{{ asset('storage/' . $berita->gambar) }}"
         class="img-fluid rounded mb-4">


        <div class="detail-body">
            {!! nl2br(e($berita->isi)) !!}
        </div>

    </div>
</section>
@endsection
