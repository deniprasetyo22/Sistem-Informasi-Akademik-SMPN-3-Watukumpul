<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TugasSenibudaya extends Model
{
    use HasFactory;

    protected $table = 'tugas_senibudaya';

    protected $fillable = [
        'nisn',
        'nama',
        'kelas',
        'judul',
        'file'
    ];
}
