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
        Schema::create('kop_surats', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->nullable();
            $table->string('nama_kab')->nullable();
            $table->string('nama_kec')->nullable();
            $table->string('nama_desa')->nullable();
            $table->string('alamat')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kop_surats');
    }
};
