<?php

namespace App\Http\Controllers;
use App\Models\KepuasanPasien;
use Illuminate\Http\Request;

class KepuasanPasienController extends Controller
{
    public function index()
    {
        $data = KepuasanPasien::all();
        return view('kepuasan_pasien.index', compact('data'));
    }

    public function create()
    {
        $unit = 'CRO';
        return view('kepuasan_pasien.create', compact('unit'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'unit' => 'required|string|max:255',
            'num' => 'required|numeric|between:0,100.0',
            'denum' => 'required|numeric|between:0,100.0',
            'year' => 'required|in:2023,2024', 
        ]);

        // Create a new entry
        KepuasanPasien::create($validated);

        return redirect()->route('kepuasan-pasien.index')->with('success', 'Data berhasil disimpan.');
    }

    public function edit($id)
    {
        $data = KepuasanPasien::findOrFail($id);
        $unit = 'CRO';
        return view('kepuasan_pasien.edit', compact('data', 'unit'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'unit' => 'required|string|max:255',
            'num' => 'required|numeric|between:0,100.0',
            'denum' => 'required|numeric|between:0,100.0',
            'year' => 'required|in:2023,2024', 
        ]);

        // Find the existing entry and update it
        $data = KepuasanPasien::findOrFail($id);
        $data->update($validated);

        return redirect()->route('kepuasan-pasien.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $data = KepuasanPasien::findOrFail($id);
        $data->delete();

        return redirect()->route('kepuasan-pasien.index')->with('success', 'Data berhasil dihapus.');
    }
}
