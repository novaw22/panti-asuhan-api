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
        Schema::create('prestasis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('anak_asuh_id');
            $table->string('judul');
            $table->date('tanggal_lomba');
            $table->string('status');
            $table->string('bukti_prestasi');

            $table->foreign('anak_asuh_id')->references('id')->on('anak_asuhs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prestasis');
    }
};
