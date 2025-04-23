<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penerbit extends Model
{
    use HasFactory;

    protected $table = 'penerbit';
    protected $primaryKey = 'kd_penerbit';

    protected $fillable = [
        'id_penerbit',
        'nama_penerbit',
        'alamat',
        'kota',
        'telepon',
    ];

    // Relasi: Satu penerbit memiliki banyak buku
    public function buku()
    {
        return $this->hasMany(Buku::class, 'nama_penerbit', 'nama_penerbit');
    }
}
