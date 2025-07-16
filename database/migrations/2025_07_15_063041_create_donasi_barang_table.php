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
        Schema::create('donasi_barang', function (Blueprint $table) {
            $table->id();
            $table->foreignId('program_donasi_id')->constrained('program_donasi')->onDelete('cascade');
            $table->string('nama_lengkap');
            $table->string('kontak');
            $table->enum('jenis_donasi', ['sembako', 'pakaian layak pakai', 'perlengkapan bayi', 'alat sekolah', 'lainnya']);
            $table->string('jenis_donasi_lainnya')->nullable();
            $table->text('deskripsi_barang');
            $table->text('alamat_pengirim');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donasi_barang');
    }
};
