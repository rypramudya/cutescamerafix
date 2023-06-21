<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tabel_detail_peminjaman', function (Blueprint $table) {
            $table->string('id_pinjam');
            $table->string('type_kamera');
            $table->string('jam_ambil');
            $table->string('lama_sewa');
            $table->date('tgl_sewa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_detail_peminjaman');
    }
};