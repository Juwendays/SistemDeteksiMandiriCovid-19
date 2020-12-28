<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hasil extends Model
{
    use HasFactory;

    public function hasils()
    {
    	return $this->belongsTo('App\Models\Biodata');
    }
}
