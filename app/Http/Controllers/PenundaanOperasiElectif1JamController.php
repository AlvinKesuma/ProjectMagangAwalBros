<?php

namespace App\Http\Controllers;

use App\Models\PenundaanOperasiElectif1Jam;
use Illuminate\Http\Request;

class PenundaanOperasiElectif1JamController extends Controller
{
    public function index()
    {
        $data = PenundaanOperasiElectif1Jam::all();
        return view('penundaan_operasi_electif_1Jam.index', compact('data'));
    }

    public function create()
    {
        $unit = 'Kamar Bedah';
        return view('penundaan_operasi_electif_1Jam.create', compact('unit'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'unit' => 'required|string|max:255',
            'num' => 'required|numeric|between:0,4.9',
            'denum' => 'required|numeric|between:0,4.9',
            'year' => 'required|in:2023,2024', 
        ]);

        // Create a new entry
        PenundaanOperasiElectif1Jam::create($validated);

        return redirect()->route('penundaan-operasi-electif-1Jam.index')->with('success', 'Data berhasil disimpan.');
    }

    public function edit($id)
    {
        $data = PenundaanOperasiElectif1Jam::findOrFail($id);
        $unit = 'Kamar Bedah';
        return view('penundaan_operasi_electif_1Jam.edit', compact('data', 'unit'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'unit' => 'required|string|max:255',
            'num' => 'required|numeric|between:0,4.9',
            'denum' => 'required|numeric|between:0,4.9',
            'year' => 'required|in:2023,2024', 
        ]);

        // Find the existing entry and update it
        $data = PenundaanOperasiElectif1Jam::findOrFail($id);
        $data->update($validated);

        return redirect()->route('penundaan-operasi-electif-1Jam.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $data = PenundaanOperasiElectif1Jam::findOrFail($id);
        $data->delete();

        return redirect()->route('penundaan-operasi-electif-1Jam.index')->with('success', 'Data berhasil dihapus.');
    }
}
