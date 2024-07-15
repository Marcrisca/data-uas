<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Kendaraan;
use App\Models\AreaParkir;
use Carbon\Carbon;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transaksi = Transaksi::with(['kendaraan', 'areaParkir'])->get();
        return view('transaksi.index', compact('transaksi'));
    }

    public function create()
    {
        $kendaraan = Kendaraan::all();
        $areaParkir = AreaParkir::all();
        return view('transaksi.create', compact('kendaraan', 'areaParkir'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'mulai' => 'required|date_format:H:i',
            'keterangan' => 'required|max:100',
            'kendaraan_id' => 'required|exists:kendaraan,id',
            'area_parkir_id' => 'required|exists:area_parkir,id',
        ]);

        Transaksi::create([
            'tanggal' => $request->tanggal,
            'mulai' => $request->mulai,
            'keterangan' => $request->keterangan,
            'kendaraan_id' => $request->kendaraan_id,
            'area_parkir_id' => $request->area_parkir_id,
            'keluar' => null, // Awalnya keluar null
            'biaya' => 0, // Awalnya biaya 0
        ]);

        return redirect()->route('transaksi.index')->with('success', 'Waktu masuk berhasil ditambahkan.');
    }

    public function edit(Transaksi $transaksi)
    {
        $kendaraan = Kendaraan::all();
        $areaParkir = AreaParkir::all();
        return view('transaksi.edit', compact('transaksi', 'kendaraan', 'areaParkir'));
    }

    public function update(Request $request, Transaksi $transaksi)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'mulai' => 'required|date_format:H:i',
            'keluar' => 'nullable|date_format:H:i',
            'keterangan' => 'required|max:100',
            'kendaraan_id' => 'required|exists:kendaraan,id',
            'area_parkir_id' => 'required|exists:area_parkir,id',
        ]);

        $kendaraan = Kendaraan::find($request->kendaraan_id);

        // Ambil waktu keluar dari request atau gunakan waktu saat ini jika tidak ada
        $keluar = $request->keluar ?? Carbon::now()->format('H:i');

        // Hitung biaya berdasarkan perbedaan waktu
        $mulai = Carbon::createFromFormat('H:i', $request->mulai);
        $durasiMenit = $mulai->diffInMinutes(Carbon::createFromFormat('H:i', $keluar));

        $tarif = ($kendaraan->jenis == 'mobil') ? 5000 : 2000;
        $biaya = ceil($durasiMenit / 60) * $tarif;

        // Update transaksi
        $transaksi->update([
            'tanggal' => $request->tanggal,
            'mulai' => $request->mulai,
            'keluar' => $keluar,
            'keterangan' => $request->keterangan,
            'biaya' => $biaya,
            'kendaraan_id' => $request->kendaraan_id,
            'area_parkir_id' => $request->area_parkir_id,
        ]);

        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil diperbarui.');
    }

    public function show(Transaksi $transaksi)
    {
        return view('transaksi.show', compact('transaksi'));
    }

    public function destroy(Transaksi $transaksi)
    {
        $transaksi->delete();

        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil dihapus.');
    }
}
