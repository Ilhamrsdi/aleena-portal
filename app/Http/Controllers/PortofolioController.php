<?php

namespace App\Http\Controllers;
use App\Models\Portofolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortofolioController extends Controller
{
    public function index()
    {
        $portofolios = Portofolio::orderBy('created_at', 'desc')->paginate(2); 
        return view('admin.portofolio.index', compact('portofolios'));
        //
    }
    public function create()
    {
        return view('admin.portofolio.create');
        //
    }
   public function store(Request $request)
{
    $request->validate([
        'judul' => 'required|string|max:255',
        'photo' => 'required|image|max:2048',
    ]);

    $gambarPath = $request->file('photo')->store('images/portofolio', 'public');

    Portofolio::create([
        'judul' => $request->judul,
        'photo' => $gambarPath, // SIMPAN APA ADANYA
    ]);

    return redirect()->route('admin.portofolio.index')
        ->with('success', 'Portofolio dan Pencapaian berhasil ditambahkan.');
}
    public function edit($id)
    {
        $portofolio = Portofolio::findOrFail($id);
        return view('admin.portofolio.edit', compact('portofolio'));
        //
    }

    public function destroy(Portofolio $portofolio)
    {
        $portofolio->delete();
        return redirect()->route('admin.portofolio.index')->with('success', 'Portofolio dan Pencapaian berhasil dihapus.');
        //
    }
    
    public function update(Request $request, $id)
    {
        $portofolio = Portofolio::findOrFail($id);

        $request->validate([
            'judul' => 'required|string|max:255',
            'photo' => 'nullable|image|max:2048',
        ]);

        $data = [
            'judul' => $request->judul,
        ];

        if ($request->hasFile('photo')) {
            // hapus gambar lama
            if ($portofolio->photo && Storage::disk('public')->exists($portofolio->photo)) {
                Storage::disk('public')->delete($portofolio->photo);
            }

            // upload gambar baru
            $data['photo'] = $request->file('photo')
                                    ->store('images/portofolio', 'public');
        }

        $portofolio->update($data);

        return redirect()->route('admin.portofolio.index')
            ->with('success', 'Portofolio berhasil diperbarui.');
    }
    //
}
