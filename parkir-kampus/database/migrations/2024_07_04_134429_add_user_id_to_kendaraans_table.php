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
    Schema::table('kendaraans', function (Blueprint $table) {
        if (!Schema::hasColumn('kendaraans', 'user_id')) {
            $table->foreignId('user_id')->after('rating')->constrained('users')->onDelete('cascade');
        }
        if (Schema::hasColumn('kendaraans', 'pemilik')) {
            $table->dropColumn('pemilik');
        }
    });
}

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('kendaraans', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
            $table->string('pemilik', 40)->after('merk');
        });
    }
};