<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    use HasFactory;

    protected $fillable = ['nik','nama','email','no_test','alamat','no','kota','foto','fotoktp'];

    public function hasil()
    {
    	return $this->belongsTo(Hasil::class,'id');
    }
    
}
