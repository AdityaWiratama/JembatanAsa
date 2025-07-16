<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProgramDonasi;

class LandingController extends Controller
{
    public function index()
    {
        $programs = ProgramDonasi::latest()->get();
        return view('landing', compact('programs'));
    }
}