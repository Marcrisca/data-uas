<?php

namespace App\Http\Controllers;

use App\Models\Jenis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class JenisController extends Controller
{
    public function show()
    {
        $data_layout = [
            'title' => 'Halaman Jenis'
        ];

        $list_jenis =  Jenis::all();
        View::share($data_layout);
        return view('jenis.show', ['list_jenis' => $list_jenis]);
    }
}