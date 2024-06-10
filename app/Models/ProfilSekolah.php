<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilSekolah extends Model
{
    use HasFactory;

    protected $table = 'profilsekolah';

    protected $fillable = [
        'namasekolah',
        'npsn',
        'statussekolah',
        'bentuksekolah',
        'statuskepemilikan',
        'akreditasi',
        'kurikulum',
        'jumlahguru',
        'jumlahsiswa',
        'visi',
        'misi',
        'struktur'
    ];
}
