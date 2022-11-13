<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiswaKelas extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function kuota_kelass(){
        return $this->belongsTo(kuota_kelas::class, 'kuota_kelas_id','id');
    }
}
