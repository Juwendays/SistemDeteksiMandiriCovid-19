<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    public function hasils()
    {
    	return $this->hasMany(Hasil::class);
    }
}
