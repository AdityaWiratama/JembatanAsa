<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;

class DonationController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama'    => 'required|string|max:255',
            'alamat'   => 'nullable|string|max:255',
            'telepon' => ['required', 'string', 'max:20', 'regex:/^[0-9+\-\s]+$/'],
        ]);

        Donation::create([
            'nama'      => $validated['nama'],
            'alamat'     => $validated['alamat'],
            'telephone' => $validated['telepon'],
        ]);

         return redirect()->away('https://wa.me/6282230099009')->with('success', 'Terima kasih, data zakat Anda berhasil dikirim!');
    }
}
