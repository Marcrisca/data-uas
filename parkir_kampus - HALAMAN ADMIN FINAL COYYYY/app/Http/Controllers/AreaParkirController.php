<?php

namespace App\Http\Controllers;

use App\Models\AreaParkir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class AreaParkirController extends Controller
{
    public function show()
    {
        $data_layout = [
            'title' => 'Halaman AreaParkir'
        ];

        $list_areaparkir =  AreaParkir::all();
        View::share($data_layout);
        return view('areaparkir.show', ['list_areaparkir' => $list_areaparkir]);
    }
}
