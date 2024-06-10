<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pmr extends Model
{
    use HasFactory;

    protected $table = 'ekstrakurikuler_pmr';

    protected $fillable = [
        'deskripsi',
        'foto'
    ];
}
