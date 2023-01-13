<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'jenis-servis',
        'tanggal',
        'harga'
    ];
    protected $table = 'transaksi';
    public $timestamps = false;
    
}
