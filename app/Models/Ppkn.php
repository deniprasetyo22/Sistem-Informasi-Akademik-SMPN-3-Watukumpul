<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ppkn extends Model
{
    use HasFactory;

    protected $table = 'materi_ppkn';

    protected $fillable = [
        'judul',
        'file'
    ];
}
