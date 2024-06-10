<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BahasaInggris extends Model
{
    use HasFactory;

    protected $table = 'materi_bahasa_inggris';

    protected $fillable = [
        'judul',
        'file'
    ];
}
