@extends('layouts.dashboard') 
@section('content')

<div class="card shadow-sm p-4">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="m-0">Manajemen Berita</h4>

        <a href="{{ route('admin.berita.create') }}" class="btn btn-primary btn-sm">
            <i class="fa fa-plus"></i> Tambah Berita
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th width="60">No</th>
                    <th>Judul</th>
                    <th>Gambar</th>
                    <th>Tanggal</th>
                    <th width="150" class="text-center">Aksi</th>
                </tr>
            </thead>

            <tbody>

                @forelse ($beritas as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>

                    <td>{{ $item->judul }}</td>

                    <td>
                    <img src="{{ asset('storage/' . $item->gambar) }}" 
                    width="70" height="50" 
                    style="object-fit: cover; border-radius: 4px;">

                    </td>

                    <td>{{ $item->created_at->format('d M Y') }}</td>

                    <td class="text-center">
                        <a href="{{ route('admin.berita.edit', $item->id) }}" class="btn btn-warning btn-sm">
                            <i class="fa fa-edit"></i>
                        </a>

                        <form action="{{ route('admin.berita.destroy', $item->id) }}" method="POST" 
                              class="d-inline-block"
                              onsubmit="return confirm('Yakin ingin menghapus berita ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>

                @empty
                <tr>
                    <td colspan="5" class="text-center text-muted">
                        Belum ada berita.
                    </td>
                </tr>
                @endforelse

            </tbody>
        </table>
    </div>

</div>

@endsection
