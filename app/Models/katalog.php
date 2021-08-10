<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class katalog extends Model
{
    protected $table = 'katalog';
    protected $primaryKey = 'id_produk';
    protected $guarded = [];
    protected $fillable = ['id_produk','nama_produk','harga','deskripsi_produk','gambar_produk'];
}
