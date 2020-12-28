<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    use HasFactory;

    protected $fillable = ['nik','nama','email','alamat','no','kota','foto','fotoktp'];

    public function biodatas()
    {
    	return $this->hasMany('App\Models\Hasil');
    }
}
