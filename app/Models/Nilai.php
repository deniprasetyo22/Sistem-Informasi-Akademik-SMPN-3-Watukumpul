<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;

    protected $table = 'nilai';

    protected $fillable = [
        'nama',
        'jenis_kelamin',
        'nisn',
        'semester',
        'pabp_a',
        'pabp_b',
        'pabp_c',
        'ppkn_a',
        'ppkn_b',
        'ppkn_c',
        'b_indo_a',
        'b_indo_b',
        'b_indo_c',
        'mtk_a',
        'mtk_b',
        'mtk_c',
        'ipa_a',
        'ipa_b',
        'ipa_c',
        'ips_a',
        'ips_b',
        'ips_c',
        'b_inggris_a',
        'b_inggris_b',
        'b_inggris_c',
        'seni_budaya_a',
        'seni_budaya_b',
        'seni_budaya_c',
        'pjok_a',
        'pjok_b',
        'pjok_c',
        'prakarya_a',
        'prakarya_b',
        'prakarya_c'
    ];
}
