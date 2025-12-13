<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;    
use App\Models\Berita;
use App\Models\Teams;
use App\Models\Portofolio;
class LandingpageController extends Controller
{
    public function index()
    {
        // Ambil 3 berita terbaru
        $berita = Berita::latest()->take(3)->get();
        $teams = Teams::latest()->take(3)->get();
        $portofolios = Portofolio::latest()->take(6)->get();

        // Kirim ke view
        return view('landingpage', compact('berita', 'teams', 'portofolios'));
    }
}
