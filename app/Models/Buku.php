<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'buku';
    protected $primaryKey = 'kd_buku';

    protected $fillable = [
        'id_buku',
        'kategori',
        'nama_buku',
        'harga',
        'stok',
        'nama_penerbit',
    ];

    // Relasi
    public function penerbit()
    {
        return $this->belongsTo(Penerbit::class, 'nama_penerbit', 'nama_penerbit');
    }
}
