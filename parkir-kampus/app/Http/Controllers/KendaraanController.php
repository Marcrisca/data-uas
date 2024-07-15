<?php

namespace App\Http\Controllers;

use App\Models\Jenis;
use App\Models\Kendaraan;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    public function index()
    {
        if (auth()->user()->role === 'admin') {
            $kendaraan = Kendaraan::with('jenisKendaraan')->get();
        } else {
            $kendaraan = Kendaraan::with('jenisKendaraan')->where('user_id', auth()->id())->get();
        }
        return view('kendaraan.index', compact('kendaraan'));
    }

    public function create()
    {
        $jenisKendaraan = Jenis::all();
        return view('kendaraan.create', compact('jenisKendaraan'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'merk' => 'required|max:30',
            'nopol' => 'required|max:20',
            'thn_beli' => 'required|integer',
            'deskripsi' => 'required|max:200',
            'jenis_kendaraan_id' => 'required|exists:jenis,id',
            'kapasitas_kursi' => 'required|integer',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        $validatedData['user_id'] = auth()->id();

        Kendaraan::create($validatedData);
        return redirect()->route('kendaraan.index')->with('success', 'Kendaraan berhasil ditambahkan.');
    }

    public function show(Kendaraan $kendaraan)
    {
        if (auth()->user()->role === 'admin' || $kendaraan->user_id === auth()->id()) {
            return view('kendaraan.show', compact('kendaraan'));
        }
        return redirect()->route('kendaraan.index')->with('error', 'Anda tidak memiliki akses untuk melihat kendaraan ini.');
    }

    public function edit(Kendaraan $kendaraan)
    {
        if (auth()->user()->role === 'admin' || $kendaraan->user_id === auth()->id()) {
            $jenisKendaraan = Jenis::all();
            return view('kendaraan.edit', compact('kendaraan', 'jenisKendaraan'));
        }
        return redirect()->route('kendaraan.index')->with('error', 'Anda tidak memiliki akses untuk mengedit kendaraan ini.');
    }

    public function update(Request $request, Kendaraan $kendaraan)
    {
        if (auth()->user()->role === 'admin' || $kendaraan->user_id === auth()->id()) {
            $validatedData = $request->validate([
                'merk' => 'required|max:30',
                'nopol' => 'required|max:20',
                'thn_beli' => 'required|integer',
                'deskripsi' => 'required|max:200',
                'jenis_kendaraan_id' => 'required|exists:jenis,id',
                'kapasitas_kursi' => 'required|integer',
                'rating' => 'required|integer|min:1|max:5',
            ]);

            $kendaraan->update($validatedData);
            return redirect()->route('kendaraan.index')->with('success', 'Kendaraan berhasil diperbarui.');
        }
        return redirect()->route('kendaraan.index')->with('error', 'Anda tidak memiliki akses untuk mengedit kendaraan ini.');
    }

    public function destroy(Kendaraan $kendaraan)
    {
        if (auth()->user()->role === 'admin' || $kendaraan->user_id === auth()->id()) {
            $kendaraan->delete();
            return redirect()->route('kendaraan.index')->with('success', 'Kendaraan berhasil dihapus.');
        }
        return redirect()->route('kendaraan.index')->with('error', 'Anda tidak memiliki akses untuk menghapus kendaraan ini.');
    }
}
