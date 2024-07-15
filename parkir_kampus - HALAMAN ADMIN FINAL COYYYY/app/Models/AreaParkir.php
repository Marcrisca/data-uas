<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AreaParkir extends Model
{
    use HasFactory;

    protected $table = 'AreaParkir';
    protected $fillable = ['id', 'nama', 'kapasitas', 'keterangan', 'kampus_id'];
}
