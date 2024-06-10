<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pramuka extends Model
{
    use HasFactory;

    protected $table = 'ekstrakurikuler_pramuka';

    protected $fillable = [
        'deskripsi',
        'foto'
    ];
}
