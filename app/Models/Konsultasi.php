<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konsultasi extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'email',
        'nohp',
        'domisili',
        'keluhan'
    
    ];
    protected $table = 'konsultasi';
    public $timestamps = false;
}
