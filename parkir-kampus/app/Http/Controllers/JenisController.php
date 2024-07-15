<?php

namespace App\Http\Controllers;

use App\Models\Jenis;
use Illuminate\Http\Request;

class JenisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jenis = Jenis::all();
        return view('jenis.index', compact('jenis'));
    }

    public function create()
    {
        return view('jenis.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:20|unique:jenis,nama',
        ]);

        Jenis::create($request->all());

        return redirect()->route('jenis.index')->with('success', 'Jenis kendaraan berhasil ditambahkan.');
    }

    public function show(Jenis $jeni)
    {
        return view('jenis.show', compact('jeni'));
    }

    public function edit(Jenis $jeni)
    {
        return view('jenis.edit', compact('jeni'));
    }

    public function update(Request $request, Jenis $jeni)
    {
        $request->validate([
            'nama' => 'required|max:20|unique:jenis,nama,' . $jeni->id,
        ]);

        $jeni->update($request->all());

        return redirect()->route('jenis.index')->with('success', 'Jenis kendaraan berhasil diperbarui.');
    }

    public function destroy(Jenis $jeni)
    {
        $jeni->delete();

        return redirect()->route('jenis.index')->with('success', 'Jenis kendaraan berhasil dihapus.');
    }
}
