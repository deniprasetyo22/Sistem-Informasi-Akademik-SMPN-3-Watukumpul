<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BahasaIndonesia extends Model
{
    use HasFactory;

    protected $table = 'materi_bahasa_indonesia';

    protected $fillable = [
        'judul',
        'file'
    ];
}
