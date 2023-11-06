<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Valas extends Model
{
    use HasFactory;
    protected $table = 'valas';

    protected $fillable = [
        'valas_id',
        'nama_valas',
        'nilai_jual',
        'nilai_beli',
        'tanggal_rate'
    ];
}
