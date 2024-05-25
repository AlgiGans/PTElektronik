<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    use HasFactory;
    protected $table = 'suppliers';
    
    protected $fillable = [
        'id_Supplier',
        'Nama_Supplier',
        'Alamat',
        'E-mail',
        'Contact_Person',
        'Nomor_Telepon',
    ];
}
