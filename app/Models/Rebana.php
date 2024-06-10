<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rebana extends Model
{
    use HasFactory;

    protected $table = 'ekstrakurikuler_rebana';

    protected $fillable = [
        'deskripsi',
        'foto'
    ];
}
