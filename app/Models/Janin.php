<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Janin extends Model
{
    // use HasFactory;
    protected $table = 'janins'; // Ganti dengan nama tabel yang sesuai dalam database

    // Definisikan kolom-kolom yang dapat diisi pada model Janin
    protected $fillable = [
        'buah',
        'deskripsi',
        'weight',
        'height',
        'trimester',
    ];
}
