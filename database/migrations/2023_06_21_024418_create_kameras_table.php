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
        Schema::create('kameras', function (Blueprint $table) {
            $table->id('id_kamera');
            $table->string('nama_kamera');
            $table->integer('stok_kamera')->default(0);
            $table->string('type_kamera');
            $table->string('image_kamera')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kameras');
    }
};
