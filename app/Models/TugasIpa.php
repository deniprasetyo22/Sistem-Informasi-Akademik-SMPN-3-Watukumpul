<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TugasIpa extends Model
{
    use HasFactory;

    protected $table = 'tugas_ipa';

    protected $fillable = [
        'nisn',
        'nama',
        'kelas',
        'judul',
        'file'
    ];
}
