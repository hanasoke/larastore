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
        Schema::create('gurus', function (Blueprint $table) {
            $table->id();

            $table->string('slug')->unique();

            $table->string('nama');

            $table->string('gelar')->nullable();

            $table->enum(
                'jenis_kelamin',
                ['Laki-laki', 'Perempuan']
            );

            $table->unsignedInteger('usia')->nullable();

            $table->string('mata_pelajaran');

            $table->string('pendidikan')->nullable();

            $table->string('universitas')->nullable();

            $table->unsignedInteger('pengalaman')->default(0);

            $table->string('foto')->nullable();

            $table->string('icon')->nullable();

            $table->text('deskripsi')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gurus');
    }
};
