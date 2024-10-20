<?php

namespace App\Http\Controllers;

use App\Models\KepatuhanIdentifikasi;
use Illuminate\Http\Request;

class KepatuhanIdentifikasiController extends Controller
{
    public function index()
    {
        $data = KepatuhanIdentifikasi::all();
        return view('kepatuhan_identifikasi.index', compact('data'));
    }

    public function create()
    {
        $unit = 'Mutu'; 
        return view('kepatuhan_identifikasi.create', compact('unit'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'unit' => 'required|string|max:255',
            'kip1' => 'required|numeric|between:0,100.0',
            'kip2' => 'required|numeric|between:0,100.0',
            'kip3' => 'required|numeric|between:0,100.0',
            'kip4' => 'required|numeric|between:0,100.0',
            'num' => 'required|numeric|between:0,100.0',
            'denum' => 'required|numeric|between:0,100.0',
            'month' => 'required|in:Januari,Februari,Maret,April,Mei,Juni,Juli,Agustus,September,Oktober,November,Desember',
            'year' => 'required|in:2023,2024',
        ]);
         // Hitung total num dan denum
         $num = $validated['kip1'] + $validated['kip2'] + $validated['kip3'] + $validated['kip4'];
         $denum = $num;

        KepatuhanIdentifikasi::create($validated);

        return redirect()->route('kepatuhan-identifikasi.index')->with('success', 'Data berhasil disimpan.');
    }

    public function edit($id)
    {
        $data = KepatuhanIdentifikasi::findOrFail($id);
        $unit = 'Kamar Bedah'; 
        return view('kepatuhan_identifikasi.edit', compact('data', 'unit'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'unit' => 'required|string|max:255',
            'kip1' => 'required|numeric|between:0,100.0',
            'kip2' => 'required|numeric|between:0,100.0',
            'kip3' => 'required|numeric|between:0,100.0',
            'kip4' => 'required|numeric|between:0,100.0',
            'num' => 'required|numeric|between:0,100.0',
            'denum' => 'required|numeric|between:0,100.0',
            'month' => 'required|in:Januari,Februari,Maret,April,Mei,Juni,Juli,Agustus,September,Oktober,November,Desember',
            'year' => 'required|in:2023,2024',
        ]);

        $data = KepatuhanIdentifikasi::findOrFail($id);
        $data->update($validated);

        return redirect()->route('kepatuhan-identifikasi.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $data = KepatuhanIdentifikasi::findOrFail($id);
        $data->delete();

        return redirect()->route('kepatuhan-identifikasi.index')->with('success', 'Data berhasil dihapus.');
    }
}
