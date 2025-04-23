<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenerbitTable extends Migration
{
    public function up()
    {
        Schema::create('penerbit', function (Blueprint $table) {
            $table->id('id_penerbit');
            $table->string('nama_penerbit');
            $table->string('alamat');
            $table->string('kota');
            $table->string('telepon');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('penerbit');
    }
}
