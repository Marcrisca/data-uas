<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal',
        'mulai',
        'keluar',
        'keterangan',
        'biaya',
        'kendaraan_id',
        'area_parkir_id',
    ];

    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class);
    }

    public function areaParkir()
    {
        return $this->belongsTo(AreaParkir::class);
    }

    public function getTanggalAttribute($value)
    {
        return $value ? Carbon::parse($value) : null;
    }

    public function getMulaiAttribute($value)
    {
        return $value ? Carbon::parse($value) : null;
    }

    public function getKeluarAttribute($value)
    {
        return $value ? Carbon::parse($value) : null;
    }
}