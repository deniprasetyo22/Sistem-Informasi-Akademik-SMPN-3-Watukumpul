<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pabp extends Model
{
    use HasFactory;

    protected $table = 'materi_pabp';

    protected $fillable = [
        'judul',
        'file'
    ];
}
