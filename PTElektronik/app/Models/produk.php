<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;
    protected $table = 'produks';
    
    protected $fillable = [
        'id_Produk',
        'Nama_Barang',
        'Kategori',
        'Harga_Beli',
        'Stock',
        'Satuan',
        'Expired',
        'Supplier',
    ];
}
