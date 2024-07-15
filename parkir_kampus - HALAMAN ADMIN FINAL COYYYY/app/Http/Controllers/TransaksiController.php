<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class TransaksiController extends Controller
{
    public function show()
    {
        $data_layout = [
            'title' => 'Halaman Transaksi'
        ];

        $list_transaksi =  Transaksi::all();
        View::share($data_layout);
        return view('transaksi.show', ['list_transaksi' => $list_transaksi]);
    }
}