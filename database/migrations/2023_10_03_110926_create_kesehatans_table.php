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
        Schema::create('kesehatans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('anak_asuh_id');
            $table->unsignedBigInteger('penyakit_id');
            $table->string('status');
            $table->date('tanggal_sakit');
            $table->string('obat_penyakit');

            $table->foreign('anak_asuh_id')->references('id')->on('anak_asuhs');
            $table->foreign('penyakit_id')->references('id')->on('penyakits');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kesehatans');
    }
};
