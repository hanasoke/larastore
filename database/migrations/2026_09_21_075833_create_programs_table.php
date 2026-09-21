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
        Schema::create('programs', function (Blueprint $table) {
            $table->id();

            $table->string('slug')->unique();
            $table->string('nama_program');
            $table->string('mata_pelajaran');
            $table->string('jenjang');
            $table->text('deskripsi')->nullable();

            $table->string('jadwal')->nullable();

            // Simpan sebagai angka, jangan "Rp150.000"
            $table->unsignedBigInteger('harga')->default(0);

            $table->string('gambar')->nullable();
            $table->string('icon')->nullable();

            $table->boolean('aktif')->default(true);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('programs');
    }
};
