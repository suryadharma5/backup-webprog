<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Menfess extends Model
{
    use HasFactory;

    public function scopeFilter($query, array $filters){

        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('title', 'like', '%'. $search. '%');
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function menfessReply(){
        return $this->hasMany(MenfessReply::class);
    }

}
