<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    use HasFactory;
    protected $table = 'pengumuman';
    protected $fillable = [
        'id', 'nama_lengkap', 'Jalur_pendaftaran','kelas','form_id'
    ];

    public function form(){
        return $this->belongsTo(Form::class, 'id');
    }
    protected $primaryKey = 'id';
}
