<?php

namespace App\Http\Controllers;

use App\Models\kampus;
use Illuminate\Http\Request;

class KampusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kampus = Kampus::all();
        return view('kampus.index', compact('kampus'));
    }

    public function create()
    {
        return view('kampus.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:20',
            'alamat' => 'required|string|max:45',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        Kampus::create($request->all());
        return redirect()->route('kampus.index')->with('success', 'Kampus created successfully.');
    }

    public function show(Kampus $kampus)
    {
        return view('kampus.show', compact('kampus'));
    }

    public function edit(Kampus $kampus)
    {
        return view('kampus.edit', compact('kampus'));
    }

    public function update(Request $request, Kampus $kampus)
    {
        $request->validate([
            'nama' => 'required|string|max:20',
            'alamat' => 'required|string|max:45',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        $kampus->update($request->all());
        return redirect()->route('kampus.index')->with('success', 'Kampus updated successfully.');
    }

    public function destroy(Kampus $kampus)
    {
        $kampus->delete();
        return redirect()->route('kampus.index')->with('success', 'Kampus deleted successfully.');
    }
}
