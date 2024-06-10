<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pjok extends Model
{
    use HasFactory;

    protected $table = 'materi_pjok';

    protected $fillable = [
        'judul',
        'file'
    ];
}
