<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tilawatilquran extends Model
{
    use HasFactory;

    protected $table = 'ekstrakurikuler_tilawatilquran';

    protected $fillable = [
        'deskripsi',
        'foto'
    ];
}
