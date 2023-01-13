<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailServis extends Model
{
    use HasFactory;
    protected $fillable = [

        'namaServis',
        'deskripsiServis',
        'poinServis',
        'hargaServis',
    ];
    protected $table = 'detail_servis';
    public $timestamps = false;
}
