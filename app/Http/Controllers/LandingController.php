<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProgramDonasi;
use App\Models\Berita;

class LandingController extends Controller
{
    public function index()
    {
        $programs = ProgramDonasi::latest()->get();
        $beritas = Berita::latest()->take(6)->get(); // ambil 6 berita terbaru

        return view('landing', compact('programs', 'beritas'));
    }
}