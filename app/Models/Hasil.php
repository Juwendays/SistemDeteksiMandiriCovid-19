<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hasil extends Model
{
    use HasFactory;
    protected $fillable =['id','test_id','no_test,','persentase','keterangan','hasil','id_result'];

    public function result()
    {
    	return $this->belongsTo(Result::class);
    }

    public function biodata()
    {
        return $this->hasOne(Biodata::class,'id');
    }
}
