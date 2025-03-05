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
        Schema::create('pengembalian', function (Blueprint $table) {
            $table->id();
            $table->text('catatan');
            $table->string('kondisi');
    

            $table->foreignId('id_petugas')->constrained('petugas')->cascadeOnDelete();
            $table->foreignId('id_peminjaman')->constrained('peminjaman')->cascadeOnDelete();
            $table->foreignId('id_buku')->constrained('buku')->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengembalian');
    }
};
