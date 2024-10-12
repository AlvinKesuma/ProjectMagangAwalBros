<?php

namespace App\Http\Controllers;

use App\Models\AntibioticProphylaxis;
use Illuminate\Http\Request;

class AntibioticProphylaxisController extends Controller
{
    public function index()
    {
        $data = AntibioticProphylaxis::all();
        return view('antibiotic_prophylaxis.index', compact('data'));
    }

    public function create()
    {
        $unit = 'Kamar Bedah'; 
        return view('antibiotic_prophylaxis.create', compact('unit'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'unit' => 'required|string|max:255',
            'num' => 'required|numeric|between:0,100.0',
            'denum' => 'required|numeric|between:0,100.0',
            'year' => 'required|in:2023,2024',
        ]);

        AntibioticProphylaxis::create($validated);

        return redirect()->route('antibiotic-prophylaxis.index')->with('success', 'Data berhasil disimpan.');
    }

    public function edit($id)
    {
        $data = AntibioticProphylaxis::findOrFail($id);
        $unit = 'Kamar Bedah'; 
        return view('antibiotic_prophylaxis.edit', compact('data', 'unit'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'unit' => 'required|string|max:255',
            'num' => 'required|numeric|between:0,100.0',
            'denum' => 'required|numeric|between:0,100.0',
            'year' => 'required|in:2023,2024',
        ]);

        $data = AntibioticProphylaxis::findOrFail($id);
        $data->update($validated);

        return redirect()->route('antibiotic-prophylaxis.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $data = AntibioticProphylaxis::findOrFail($id);
        $data->delete();

        return redirect()->route('antibiotic-prophylaxis.index')->with('success', 'Data berhasil dihapus.');
    }
}
