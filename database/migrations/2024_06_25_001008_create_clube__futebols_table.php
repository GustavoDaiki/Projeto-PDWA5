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
        Schema::create('clube__futebols', function (Blueprint $table) {
            $table->id();
            $table->string('tecnico');
            $table->date('criacao');
            $table->string('titulos');
            $table->integer('torcida');
            $table->string('patrocinio');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clube__futebols');
    }
};
