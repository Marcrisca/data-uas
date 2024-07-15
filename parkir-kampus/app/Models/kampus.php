<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kampus extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'alamat',
        'latitude',
        'longitude',
    ];

    public function areaParkir()
    {
        return $this->hasMany(AreaParkir::class);
    }
    protected $table = 'kampus';
}
