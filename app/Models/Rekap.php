<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekap extends Model
{
    use HasFactory;
    protected $table = 'rekaps';
    protected $guarded= ['id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function form(){
        return $this->belongsTo(Form::class, 'form_id','id');
    }
}
