<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kampus extends Model
{
    use HasFactory;

    protected $table = 'Kampus';
    protected $fillable = ['id', 'nama', 'alamat', 'latitude', 'longitude'];
}
