<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TugasIps extends Model
{
    use HasFactory;

    protected $table = 'tugas_ips';

    protected $fillable = [
        'nisn',
        'nama',
        'kelas',
        'judul',
        'file'
    ];
}
