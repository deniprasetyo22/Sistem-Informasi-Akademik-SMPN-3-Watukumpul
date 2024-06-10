<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TugasPjok extends Model
{
    use HasFactory;

    protected $table = 'tugas_pjok';

    protected $fillable = [
        'nisn',
        'nama',
        'kelas',
        'judul',
        'file'
    ];
}
