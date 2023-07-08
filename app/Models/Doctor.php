<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected $casts = [
        'hari_praktek' => 'array',
    ];

    public function addHariPraktek($hari)
    {
        $hariPraktek = $this->hari_praktek ?? [];
        $hariPraktek[] = $hari;
        $this->hari_praktek = $hariPraktek;
        $this->save();
    }

    public function removeHariPraktek($hari)
    {
        $hariPraktek = $this->hari_praktek ?? [];
        $hariPraktek = array_diff($hariPraktek, [$hari]);
        $this->hari_praktek = $hariPraktek;
        $this->save();
    }

    public function rumahSakit(){
        return $this->belongsTo(RumahSakit::class, 'hospital_id');
    }
}
