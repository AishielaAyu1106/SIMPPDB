<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kuota_kelas extends Model
{
    use HasFactory;

    protected $fillable = [
        "Nama_Kelas",
        "Kuota_kelas",
    ];

    protected $guarded = [];


}
