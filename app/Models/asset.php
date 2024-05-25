<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asset extends Model
{
    use HasFactory;
    protected $table = 'assets';
    
    protected $fillable = [
        'id_Produk',
        'Nama_Barang',
        'Satuan',
        'Kategori',
        'Quantity',
    ];
    public function produk()
    {
        return $this->belongsTo(produk::class, 'id_Produk');
    }
}
