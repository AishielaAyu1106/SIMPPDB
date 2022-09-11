<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekap extends Model
{
    use HasFactory;
    protected $table = 'rekaps';
    protected $fillable = [
        'id', 'mtk', 'ipa','ips','basing','jenis_prestasi','tingkat','nama_prestasi','tahun','penyelenggara','piagam'
    ];
}
