<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class beli extends Model
{
    protected $table = 'beli';
    protected $primaryKey = 'id_beli';
    protected $guarded = [];
    protected $fillable = ['id_beli','id_produk','nama_pembeli','email_pembeli','tlp_pembeli','alamat_pembeli','jumlah_beli','proses'];
}
