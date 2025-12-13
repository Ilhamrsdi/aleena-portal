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
        $beritas = Berita::latest()->paginate(10);
        return view('admin.berita.index', compact('beritas'));
    }

    public function create()
    {
        return view('admin.berita.create');
    }

    public function store(Request $request)
    {
        // generate slug
        $slug = Str::slug($request->judul);

        $request->validate([
            'judul'  => 'required|string|max:255|unique:beritas,judul',
            'konten'    => 'required|string',
            'gambar' => 'nullable|image|max:2048',
        ]);

        $gambarPath = null;
        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('berita_gambar', 'public');
        }

        Berita::create([
            'judul'  => $request->judul,
            'slug'   => $slug,
            'konten'    => $request->konten,
            'gambar' => $gambarPath,
        ]);

        return redirect()
            ->route('admin.berita.index')
            ->with('success', 'Berita berhasil ditambahkan');
    }

    public function show($slug)
    {
        $berita = Berita::where('slug', $slug)->firstOrFail();
        return view('berita-detail', compact('berita'));
    }

    public function edit($slug)
    {
        $berita = Berita::where('slug', $slug)->firstOrFail();
        return view('admin.berita.edit', compact('berita'));
    }

    public function update(Request $request, $slug)
    {
        $berita = Berita::where('slug', $slug)->firstOrFail();
        $newSlug = Str::slug($request->judul);

        $request->validate([
            'judul'  => 'required|string|max:255|unique:beritas,judul,' . $berita->id,
            'konten'    => 'required|string',
            'gambar' => 'nullable|image|max:2048',
        ]);

        // upload gambar baru
        if ($request->hasFile('gambar')) {
            if ($berita->gambar && Storage::disk('public')->exists($berita->gambar)) {
                Storage::disk('public')->delete($berita->gambar);
            }

            $berita->gambar = $request->file('gambar')->store('berita_gambar', 'public');
        }

        $berita->update([
            'judul' => $request->judul,
            'slug'  => $newSlug,
            'konten'   => $request->konten,
        ]);

        return redirect()
            ->route('admin.berita.index')
            ->with('success', 'Berita berhasil diperbarui');
    }

    public function destroy($slug)
    {
        $berita = Berita::where('slug', $slug)->firstOrFail();

        if ($berita->gambar && Storage::disk('public')->exists($berita->gambar)) {
            Storage::disk('public')->delete($berita->gambar);
        }

        $berita->delete();

        return redirect()
            ->route('admin.berita.index')
            ->with('success', 'Berita berhasil dihapus');
    }
}
