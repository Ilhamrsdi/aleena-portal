@extends('layouts.dashboard') 
@section('content')

<div class="card shadow-sm p-4">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="m-0">Manajemen Portofolio</h4>

        <a href="{{ route('admin.portofolio.create') }}" class="btn btn-primary btn-sm">
            <i class="fa fa-plus"></i> Tambah Portofolio
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th width="60">No</th>
                    <th>Gambar</th>
                    <th>Tanggal</th>
                    <th width="150" class="text-center">Aksi</th>
                </tr>
            </thead>

            <tbody>

                @forelse ($portofolios as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                    <img src="{{ asset('storage/' . $item->photo) }}" 
                    width="70" height="50" 
                    style="object-fit: cover; border-radius: 4px;">
                    </td>

                    <td>{{ $item->created_at->format('d M Y') }}</td>

                    <td class="text-center">
                        <a href="{{ route('admin.portofolio.edit', $item->id) }}" class="btn btn-warning btn-sm">
                            <i class="fa fa-edit"></i>
                        </a>

                        <form action="{{ route('admin.portofolio.destroy', $item->id) }}" method="POST" 
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
                        Belum ada Portofolio.
                    </td>
                </tr>
                @endforelse

            </tbody>
        </table>
    </div>

</div>

@endsection
