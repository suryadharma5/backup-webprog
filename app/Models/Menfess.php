<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Menfess extends Model
{
    use HasFactory;
    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function menfessReply(){
        return $this->hasMany(MenfessReply::class);
    }
}
