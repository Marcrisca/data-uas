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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->time('mulai');
            $table->time('keluar')->nullable(); // Tambahkan kolom keluar
            $table->string('keterangan', 100);
            $table->integer('biaya')->nullable(); // Pastikan kolom biaya dapat bernilai null
            $table->foreignId('kendaraan_id')->constrained();
            $table->foreignId('area_parkir_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksis');
    }
};