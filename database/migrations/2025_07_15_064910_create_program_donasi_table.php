<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramDonasiTable extends Migration
{
    public function up()
    {
        Schema::create('program_donasi', function (Blueprint $table) {
            $table->id();
            $table->string('nama_program');
            $table->text('deskripsi')->nullable();
            $table->decimal('target_donasi', 15, 2)->nullable();
            $table->string('foto')->nullable(); 
            $table->date('tanggal_mulai')->nullable();
            $table->date('tanggal_selesai')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('program_donasi');
    }
}