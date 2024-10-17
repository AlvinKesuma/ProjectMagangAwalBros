<?php

namespace App\Http\Controllers;

use App\Models\KepatuhanAlurKlinis;
use Illuminate\Http\Request;

class KepatuhanAlurKlinisController extends Controller
{
    public function index()
    {
        $data = KepatuhanAlurKlinis::all();
        return view('kepatuhan_formularium_nasional.index', compact('data'));
    }

    public function create()
    {
        $unit = 'Farmasi';
        return view('kepatuhan_formularium_nasional.create', compact('unit'));
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
        KepatuhanAlurKlinis::create($validated);

        return redirect()->route('kepatuhan-formularium-nasional.index')->with('success', 'Data berhasil disimpan.');
    }

    public function edit($id)
    {
        $data = KepatuhanAlurKlinis::findOrFail($id);
        $unit = 'Farmasi';
        return view('kepatuhan_formularium_nasional.edit', compact('data', 'unit'));
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
        $data = KepatuhanAlurKlinis::findOrFail($id);
        $data->update($validated);

        return redirect()->route('kepatuhan-formularium-nasional.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $data = KepatuhanAlurKlinis::findOrFail($id);
        $data->delete();

        return redirect()->route('kepatuhan-formularium-nasional.index')->with('success', 'Data berhasil dihapus.');
    }
}
