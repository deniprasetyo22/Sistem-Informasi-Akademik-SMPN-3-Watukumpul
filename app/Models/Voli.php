<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voli extends Model
{
    use HasFactory;

    protected $table = 'ekstrakurikuler_voli';

    protected $fillable = [
        'deskripsi',
        'foto'
    ];
}
