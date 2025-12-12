<?php

namespace App\Http\Controllers;
use App\Models\Portofolio;
use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    public function index()
    {
        $portofolios = Portofolio::orderBy('created_at', 'desc')->paginate(2); 
        return view('admin.portofolio.index', compact('portofolios'));
        //
    }
    //
}
