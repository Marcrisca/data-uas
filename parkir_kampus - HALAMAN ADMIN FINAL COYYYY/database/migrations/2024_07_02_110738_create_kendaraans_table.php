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
        Schema::create('kendaraan', function (Blueprint $table) {
            $table->id();
            $table->string('merk', 30);
            $table->string('pemilik', 40);
            $table->string('nopol', 20);
            $table->year('thn_beli');
            $table->string('deskripsi', 200)->nullable();
            $table->unsignedBigInteger('jenis_kendaraan_id');
            $table->unsignedBigInteger('area_parkir_id');
            $table->foreign('jenis_kendaraan_id')->references('id')->on('jenis')->onDelete('cascade');
            $table->foreign('area_parkir_id')->references('id')->on('area_parkir')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kendaraan');
    }
};