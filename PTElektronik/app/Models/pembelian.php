<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembelian extends Model
{
    use HasFactory;
    protected $table = 'pembelians';
    
    protected $fillable = [
        'Nomor_Faktur',
        'Nama_Barang',
        'Harga',
        'satuan',
        'Quantity',
        'Subtotal',
        'id_Penjualan',
        'id_Supplier',
    ];
    public function supplier()
    {
        return $this->belongsTo(supplier::class, 'id_Supplier');
    }
    public function penjualan()
    {
        return $this->belongsTo(supplier::class, 'id_Penjualan');
    }
}
