<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DonasiUang;
use App\Models\ProgramDonasi;

class DonasiUangController extends Controller
{
    public function create(Request $request)
    {
        $programs = ProgramDonasi::all();
        $selectedProgramId = $request->program_id; 
        return view('donasiuang', compact('programs', 'selectedProgramId'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'program_donasi_id' => 'required|exists:program_donasi,id',
            'nama_lengkap' => 'required|string|max:255',
            'kontak' => 'required|string|max:255',
            'nominal' => 'required|numeric|min:10000',
            'metode_pembayaran' => 'required|in:Shopeepay,Dana,Ovo,BRI,BNI,BCA,Mandiri',
            'catatan_tambahan' => 'nullable|string',
        ]);

       $donasi = DonasiUang::create([
            'program_donasi_id' => $request->program_donasi_id,
            'nama_lengkap' => $request->nama_lengkap,
            'kontak' => $request->kontak,
            'nominal' => $request->nominal,
            'metode_pembayaran' => $request->metode_pembayaran,
            'catatan_tambahan' => $request->catatan_tambahan,
        ]);

        return redirect()->route('donasi.invoice', ['id' => $donasi->id]); 

    }
}