<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.berita.index', compact('beritas'));
    }

    public function create()
    {
        return view('admin.berita.create');
    }

    public function store(Request $request)
    {
        // **Merge slug sebelum validasi supaya validasi unique slug bekerja**
        $request->merge([
            'slug' => Str::slug($request->judul)
        ]);

        // Validasi input
        $request->validate([
            'judul' => 'required|string|max:255',
            'slug'  => 'required|string|max:255|unique:beritas,slug',
            'isi'   => 'required|string',
            'gambar'=> 'nullable|image|max:2048',
        ]);

        // Simpan gambar jika ada
        $gambarPath = null;
        if ($request->hasFile('gambar')) {
            // Pastikan sudah menjalankan: php artisan storage:link
            $gambarPath = $request->file('gambar')->store('berita_gambar', 'public');
        }

        // Simpan data berita ke database
        Berita::create([
            'judul' => $request->judul,
            'slug'  => $request->slug,
            'isi'   => $request->isi,
            'gambar'=> $gambarPath,
        ]);

        // Redirect ke index dengan flash message
        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil ditambahkan.');
    }

   public function show($slug)
{
    $berita = Berita::where('slug', $slug)->firstOrFail();

    return view('berita-detail', compact('berita'));
}


   public function edit($id)
{
    $berita = Berita::findOrFail($id); // ambil berita berdasarkan id
    return view('admin.berita.edit', compact('berita'));
}


    public function update(Request $request, Berita $berita)
    {
        $request->merge([
            'slug' => Str::slug($request->judul)
        ]);

        $request->validate([
            'judul' => 'required|string|max:255',
            'slug'  => 'required|string|max:255|unique:beritas,slug,' . $berita->id,
            'isi'   => 'required|string',
            'gambar'=> 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('berita_gambar', 'public');
        } else {
            $gambarPath = $berita->gambar;
        }

        $berita->update([
            'judul' => $request->judul,
            'slug'  => $request->slug,
            'isi'   => $request->isi,
            'gambar'=> $gambarPath,
        ]);

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil diupdate.');
    }

    public function destroy(Berita $berita)
    {
        // Hapus gambar dari storage jika ada
        if ($berita->gambar && \Storage::disk('public')->exists($berita->gambar)) {
            \Storage::disk('public')->delete($berita->gambar);
        }

        $berita->delete();

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil dihapus.');
    }
}
