<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penjualan extends Model
{
    use HasFactory;
    protected $table = 'penjualans';
    
    protected $fillable = [
        'Nomor_Faktur',
        'Nama_Barang',
        'Harga',
        'satuan',
        'Quantity',
        'Subtotal',
        'Tanggal_Faktur',
        'id_Produk',
        'id_Pelanggan',
    ];
    public function produk()
    {
        return $this->belongsTo(produk::class, 'id_Produk');
    }
    public function pelanggan()
    {
        return $this->belongsTo(pelanggan::class, 'id_Pelanggan');
    }

}
