<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;

    protected $table = 'Kendaraan';
    protected $fillable = ['id', 'merk', 'pemilik', 'nopol', 'thn_beli', 'deskripsi', 'jenis_kendaraan_id', 'kapasitas_kursi', 'rating', 'jenis_id'];
}
