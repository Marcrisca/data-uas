<?php

namespace App\Http\Controllers;

use App\Models\Kampus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class KampusController extends Controller
{
    public function show()
    {
        $data_layout = [
            'title' => 'Halaman Kampus'
        ];

        $list_kampus =  Kampus::all();
        View::share($data_layout);
        return view('kampus.show', ['list_kampus' => $list_kampus]);
    }
}