<?php
namespace App\Http\Controllers;

use App\Models\ProgramDonasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProgramDonasiController extends Controller
{
    public function index()
    {
        $programs = ProgramDonasi::all();
        return view('program.index', compact('programs'));
    }

    public function create()
    {
        return view('program.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_program' => 'required',
            'deskripsi' => 'nullable',
            'target_donasi' => 'nullable|numeric',
            'tanggal_mulai' => 'nullable|date',
            'tanggal_selesai' => 'nullable|date',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $program = new ProgramDonasi();
        $program->nama_program = $request->nama_program;
        $program->deskripsi = $request->deskripsi;
        $program->target_donasi = $request->target_donasi;
        $program->tanggal_mulai = $request->tanggal_mulai;
        $program->tanggal_selesai = $request->tanggal_selesai;

        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('program', 'public');
            $program->foto = $path;
        }

        $program->save();

        return redirect()->route('program.index')->with('success', 'Program berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $program = ProgramDonasi::findOrFail($id);
        return view('program.edit', compact('program'));
    }

    public function update(Request $request, $id)
    {
        $program = ProgramDonasi::findOrFail($id);

        $request->validate([
            'nama_program' => 'required',
            'deskripsi' => 'nullable',
            'target_donasi' => 'nullable|numeric',
            'tanggal_mulai' => 'nullable|date',
            'tanggal_selesai' => 'nullable|date',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $program->nama_program = $request->nama_program;
        $program->deskripsi = $request->deskripsi;
        $program->target_donasi = $request->target_donasi;
        $program->tanggal_mulai = $request->tanggal_mulai;
        $program->tanggal_selesai = $request->tanggal_selesai;

        if ($request->hasFile('foto')) {
            if ($program->foto) {
                Storage::disk('public')->delete($program->foto);
            }
            $path = $request->file('foto')->store('program', 'public');
            $program->foto = $path;
        }

        $program->save();

        return redirect()->route('program.index')->with('success', 'Program berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $program = ProgramDonasi::findOrFail($id);
        if ($program->foto) {
            Storage::disk('public')->delete($program->foto);
        }
        $program->delete();

        return redirect()->route('program.index')->with('success', 'Program berhasil dihapus.');
    }
}
