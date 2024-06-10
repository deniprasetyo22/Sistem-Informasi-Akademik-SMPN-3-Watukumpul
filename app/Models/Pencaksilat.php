<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pencaksilat extends Model
{
    use HasFactory;

    protected $table = 'ekstrakurikuler_pencaksilat';

    protected $fillable = [
        'deskripsi',
        'foto'
    ];
}
