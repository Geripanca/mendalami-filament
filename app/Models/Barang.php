<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    /** @use HasFactory<\Database\Factories\BarangFactory> */
    use HasFactory;
    protected $table = 'barang';
    protected $primaryKey = 'id_barang';  // Gunakan jika primary key bukan 'id'
    protected $fillable = [
        'name_barang',
        'harga_barang',
        'deskripsi_barang',
    ];
}
