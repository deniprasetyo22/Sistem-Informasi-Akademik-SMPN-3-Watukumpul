<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TugasBahasaindonesia extends Model
{
    use HasFactory;

    protected $table = 'tugas_bahasaindonesia';

    protected $fillable = [
        'nisn',
        'nama',
        'kelas',
        'judul',
        'file'
    ];
}
