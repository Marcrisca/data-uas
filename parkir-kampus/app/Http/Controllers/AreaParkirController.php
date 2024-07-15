<?php

namespace App\Http\Controllers;

use App\Models\AreaParkir;
use App\Models\Kampus;
use Illuminate\Http\Request;

class AreaParkirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $areaParkir = AreaParkir::with('kampus')->get();
        return view('area_parkir.index', compact('areaParkir'));
    }

    public function create()
    {
        $kampus = Kampus::all();
        return view('area_parkir.create', compact('kampus'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:30',
            'kapasitas' => 'required|integer',
            'keterangan' => 'nullable|string|max:45',
            'kampus_id' => 'required|exists:kampus,id',
        ]);

        AreaParkir::create($request->all());

        return redirect()->route('area_parkir.index')->with('success', 'Area parkir created successfully.');
    }

    public function show(AreaParkir $areaParkir)
    {
        return view('area_parkir.show', compact('areaParkir'));
    }

    public function edit(AreaParkir $areaParkir)
    {
        $kampus = Kampus::all();
        return view('area_parkir.edit', compact('areaParkir', 'kampus'));
    }

    public function update(Request $request, AreaParkir $areaParkir)
    {
        $request->validate([
            'nama' => 'required|string|max:30',
            'kapasitas' => 'required|integer',
            'keterangan' => 'nullable|string|max:45',
            'kampus_id' => 'required|exists:kampus,id',
        ]);

        $areaParkir->update($request->all());

        return redirect()->route('area_parkir.index')->with('success', 'Area parkir updated successfully.');
    }

    public function destroy(AreaParkir $areaParkir)
    {
        $areaParkir->delete();
        return redirect()->route('area_parkir.index')->with('success', 'Area parkir deleted successfully.');
    }
}
