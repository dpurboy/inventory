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
        Schema::create('detail_barangs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_barang')->constrained('barangs')->onUpdate('cascade')->onDelete('cascade');
            $table->string('kode_barang')->unique();
            $table->string('status_barang')->default('B')->comment('B=Bagus, R=Rusak, P=Perlu Perbaikan, D=Dalam Perbaikan');
            $table->timestamps();

            $table->foreign('id_barang')->references('id')->on('barangs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_barangs');
    }
};
