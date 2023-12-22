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
        Schema::create('pelajar', function (Blueprint $table) {
            $table->id();
            $table->string('no_identitas');
            $table->string('nama');
            $table->string('kelas');
            $table->string('jenis_kelamin');
            $table->string('umur');
            $table->string('hobi');
            $table->string('alamat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelajar');
    }
};