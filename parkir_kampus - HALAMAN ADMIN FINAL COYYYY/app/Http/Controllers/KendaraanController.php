<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class KendaraanController extends Controller
{
    public function show()
    {
        $data_layout = [
            'title' => 'Halaman Kendaraan'
        ];

        $list_kendaraan =  Kendaraan::all();
        View::share($data_layout);
        return view('kendaraan.show', ['list_kendaraan' => $list_kendaraan]);
    }
}
