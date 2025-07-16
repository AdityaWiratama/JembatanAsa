<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DonasiUang;
use App\Models\DonasiBarang;

class InvoiceController extends Controller
{
    // Invoice untuk Donasi Uang
    public function show($id)
    {
        $donasi = DonasiUang::with('program')->findOrFail($id);
        return view('invoiceuang', compact('donasi'));
    }
    
    public function showBarang($id)
    {
        $donasi = DonasiBarang::with('program')->findOrFail($id);
        return view('invoicebarang', compact('donasi'));
    }
}
