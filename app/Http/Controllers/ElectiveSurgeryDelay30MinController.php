<?php

namespace App\Http\Controllers;

use App\Models\ElectiveSurgeryDelay30Min;
use Illuminate\Http\Request;

class ElectiveSurgeryDelay30MinController extends Controller
{
    public function index()
    {
        $data = ElectiveSurgeryDelay30Min::all();
        return view('elective_surgery_delay_30_Min.index', compact('data'));
    }

    public function create()
    {
        $unit = 'Kamar Bedah';
        return view('elective_surgery_delay_30_Min.create', compact('unit'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'unit' => 'required|string|max:255',
            'num' => 'required|numeric|between:0,4.9',
            'denum' => 'required|numeric|between:0,4.9',
            'year' => 'required|in:2023,2024', 
        ]);

        ElectiveSurgeryDelay30Min::create($validated);

        return redirect('/elective-surgery-delay-30-min')->with('success', 'Data berhasil disimpan.');
    }

    public function edit($id)
    {
        $data = ElectiveSurgeryDelay30Min::findOrFail($id);
        $unit = 'Kamar Bedah';
        return view('elective_surgery_delay_30_Min.edit', compact('data', 'unit'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'unit' => 'required|string|max:255',
            'num' => 'required|numeric|between:0,4.9',
            'denum' => 'required|numeric|between:0,4.9',
            'year' => 'required|in:2023,2024', 
        ]);

        $data = ElectiveSurgeryDelay30Min::findOrFail($id);
        $data->update($validated);

        return redirect('/elective-surgery-delay-30-min')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $data = ElectiveSurgeryDelay30Min::findOrFail($id);
        $data->delete();

        return redirect('/elective-surgery-delay-30-min')->with('success', 'Data berhasil dihapus.');
    }
}
