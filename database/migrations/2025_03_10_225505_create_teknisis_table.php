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
    Schema::create('teknisi', function (Blueprint $table) {
        $table->id('id_teknisi');
        $table->string('nama_teknisi', 100);
        $table->string('kontak', 20)->nullable();
        $table->enum('status', ['tersedia', 'sibuk'])->default('tersedia');
        $table->timestamps();
    });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teknisi');
    }
};
