<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drumband extends Model
{
    use HasFactory;

    protected $table = 'ekstrakurikuler_drumband';

    protected $fillable = [
        'deskripsi',
        'foto'
    ];
}
