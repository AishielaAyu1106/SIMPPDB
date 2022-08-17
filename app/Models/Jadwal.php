<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;
    protected $table = 'jadwals';
    protected $fillable = [
        'id', 'Jalur_pendaftaran', 'tanggal_awal','tanggal_akhir'
    ];

    protected $primaryKey = 'id';
}
