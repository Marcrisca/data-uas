<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->time('mulai_time');
            $table->time('akhir_time');
            $table->string('keterangan', 100)->nullable();
            $table->unsignedBigInteger('kendaraan_id');
            $table->unsignedBigInteger('area_parkir_id');
            $table->decimal('biaya', 8, 2);
            $table->foreign('kendaraan_id')->references('id')->on('kendaraan')->onDelete('cascade');
            $table->foreign('area_parkir_id')->references('id')->on('area_parkir')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};