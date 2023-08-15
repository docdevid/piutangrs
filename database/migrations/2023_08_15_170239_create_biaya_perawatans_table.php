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
        Schema::create('biaya_perawatan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('piutang_id');
            $table->unsignedBigInteger('jenis_perawatan_id');
            $table->foreign('piutang_id')->references('id')->on('piutang');
            $table->foreign('jenis_perawatan_id')->references('id')->on('jenis_perawatan');
            $table->integer('biaya');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biaya_perawatan');
    }
};
