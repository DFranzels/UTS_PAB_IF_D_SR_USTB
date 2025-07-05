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
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();

            // Relasi ke tabel 'barangs'
            $table->foreignId('barang_id')
                ->constrained('barangs')
                ->restrictOnDelete()
                ->cascadeOnUpdate();

            // Relasi ke tabel 'gudangs'
            $table->foreignId('gudang_id')
                ->constrained('gudangs')
                ->restrictOnDelete()
                ->cascadeOnUpdate();

            $table->unsignedInteger('balance')->default(0); // saldo stock
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stocks');
    }
};