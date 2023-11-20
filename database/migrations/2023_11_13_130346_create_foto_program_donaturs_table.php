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
        Schema::create('foto_program_donaturs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('program_donatur_id');
            $table->string('nama_foto');

            $table->foreign('program_donatur_id')->references('id')->on('program_donaturs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foto_program_donaturs');
    }
};
