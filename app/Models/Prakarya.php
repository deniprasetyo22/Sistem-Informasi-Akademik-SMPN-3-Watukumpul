<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prakarya extends Model
{
    use HasFactory;

    protected $table = 'materi_prakarya';

    protected $fillable = [
        'judul',
        'file'
    ];
}
