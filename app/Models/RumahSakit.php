<?php

namespace App\Models;

use App\Models\Regency;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RumahSakit extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    public function regency(){
        return $this->belongsTo(Regency::class);
    }
}
