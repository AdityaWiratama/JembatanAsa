<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DonasiBarang;
use App\Models\ProgramDonasi;

class DonasiBarangController extends Controller
{
    public function create(Request $request)
    {
        $programs = ProgramDonasi::all();
        $selectedProgramId = $request->program_id; 
        return view('donasibarang', compact('programs', 'selectedProgramId'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'program_donasi_id' => 'required|exists:program_donasi,id',
            'nama_lengkap' => 'required|string|max:255',
            'kontak' => 'required|string|max:255',
            'jenis_donasi' => 'required|in:sembako,pakaian layak pakai,perlengkapan bayi,alat sekolah,lainnya',
            'deskripsi_barang' => 'required|string',
            'alamat_pengirim' => 'required|string',
        ]);

        $donasi = DonasiBarang::create([
            'program_donasi_id' => $request->program_donasi_id,
            'nama_lengkap' => $request->nama_lengkap,
            'kontak' => $request->kontak,
            'jenis_donasi' => $request->jenis_donasi,
            'jenis_donasi_lainnya' => $request->jenis_donasi === 'lainnya' ? $request->jenis_donasi_lainnya : null,
            'deskripsi_barang' => $request->deskripsi_barang,
            'alamat_pengirim' => $request->alamat_pengirim,
        ]);

        return redirect()->route('donasi.invoice.barang', ['id' => $donasi->id]);
    }
}