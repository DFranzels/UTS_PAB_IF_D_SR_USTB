<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bukus', function (Blueprint $table) {
            $table->id();
            // TODO: definisikan schema table buku anda disini
            $table->id();
            $table->string('Judul');
            $table->string('Pengarang');
            $table->integer('Tahun terbit')->nullable();
            $table->string('Penerbit')->nullable();
            $table->string('Kategori')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bukus');
    }
};
