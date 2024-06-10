<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeniBudaya extends Model
{
    use HasFactory;

    protected $table = 'materi_senibudaya';

    protected $fillable = [
        'judul',
        'file'
    ];
}
