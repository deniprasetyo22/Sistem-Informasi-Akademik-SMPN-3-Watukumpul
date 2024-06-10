<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuruDanKaryawan extends Model
{
    use HasFactory;

    protected $table = 'gurudankaryawan';

    protected $fillable = [
        'nama',
        'jabatan',
        'foto'
    ];
}
