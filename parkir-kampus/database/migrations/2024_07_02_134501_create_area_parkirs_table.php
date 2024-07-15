<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('area_parkirs', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 30);
            $table->integer('kapasitas');
            $table->string('keterangan', 45);
            $table->foreignId('kampus_id')->constrained('kampus');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('area_parkirs');
    }
};
