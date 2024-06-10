<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Englishclub extends Model
{
    use HasFactory;

    protected $table = 'ekstrakurikuler_englishclub';

    protected $fillable = [
        'deskripsi',
        'foto'
    ];
}
