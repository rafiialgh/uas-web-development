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
        Schema::create('valas', function (Blueprint $table) {
            $table->id('valas_id');
            $table->string('nama_valas');
            $table->integer('nilai_jual');
            $table->integer('nilai_beli');
            $table->date('tanggal_rate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('valas');
    }
};
