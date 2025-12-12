@extends('layouts.dashboard') 
@section('content')

<div class="card shadow-sm p-4">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="m-0">Manajemen Team</h4>

        <a href="{{ route('admin.team.create') }}" class="btn btn-primary btn-sm">
            <i class="fa fa-plus"></i> Tambah Team
        </a>
    </div>

 <div class="table-responsive">
    <table class="table table-hover align-middle">
        <thead class="table-dark">
            <tr>
                <th style="width: 60px;">No</th>
                <th style="width: 220px;">Nama</th>
                <th style="width: 180px;">Role</th>
                <th style="width: 120px;">Photo</th>
                <th>Info</th>
                <th style="width: 150px;" class="text-center">Aksi</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($teams as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>

                <td>{{ $item->name }}</td>
                <td>{{ $item->position }}</td>

                <td>
                    <img src="{{ asset('storage/' . $item->photo) }}" 
                         width="70" height="50" 
                         style="object-fit: cover; border-radius: 4px;">
                </td>

                <td>{{ $item->info }}</td>

                <td class="text-center">
                    <a href="{{ route('admin.team.edit', $item->id) }}" class="btn btn-warning btn-sm">
                        <i class="fa fa-edit"></i>
                    </a>

                    <form action="{{ route('admin.team.destroy', $item->id) }}" 
                          method="POST" class="d-inline-block"
                          onsubmit="return confirm('Yakin ingin menghapus team ini?')">
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
                <td colspan="6" class="text-center text-muted">
                    Belum ada team
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>


</div>

@endsection
