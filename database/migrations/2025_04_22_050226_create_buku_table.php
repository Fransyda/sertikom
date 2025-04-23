<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukuTable extends Migration
{
    public function up()
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->id('kd_buku');
            $table->string('id_buku');
            $table->string('kategori');
            $table->string('nama_buku');
            $table->decimal('harga', 10, 2); // Menggunakan decimal untuk harga
            $table->integer('stok');
            $table->string('nama_penerbit'); // Kolom untuk relasi ke tabel penerbit
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('buku');
    }
}
