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
        Schema::create('donasi_uang', function (Blueprint $table) {
            $table->id();
            $table->foreignId('program_donasi_id')->constrained('program_donasi')->onDelete('cascade');
            $table->string('nama_lengkap');
            $table->string('kontak');
            $table->decimal('nominal', 15, 2);
            $table->enum('metode_pembayaran', ['Shopeepay', 'Dana', 'Ovo', 'BRI', 'BNI', 'BCA', 'Mandiri']);
            $table->text('catatan_tambahan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donasi_uang');
    }
};
