<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
    Schema::create('gedung', function (Blueprint $table) {
        $table->id('id_gedung');
        $table->unsignedBigInteger('id_instansi');
        $table->string('nama_gedung', 100);
        $table->string('alamat_gedung', 255);
        $table->integer('jumlah_lantai');
        $table->text('fasilitas')->nullable();
        $table->timestamps();

        $table->foreign('id_instansi')->references('id_instansi')->on('instansi')->onDelete('cascade');
    });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gedung');
    }
};
