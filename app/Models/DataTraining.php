<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataTraining extends Model
{
    use HasFactory;

    protected $table = 'data_trainings'; // Nama tabel di database

    protected $fillable = [
        'fullname',
        'usia_int',
        'usia',
        'jenis_kelamin',
        'tussis',
        'febris',
        'selesma',
        'gastreonteritis',
        'colic_abdomen',
        'polyuria',
        'polydipsia',
        'weakness',
        'keterangan',
    ];
}
