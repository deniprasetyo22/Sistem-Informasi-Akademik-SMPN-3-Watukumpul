<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ips extends Model
{
    use HasFactory;

    protected $table = 'materi_ips';

    protected $fillable = [
        'judul',
        'file'
    ];
}
