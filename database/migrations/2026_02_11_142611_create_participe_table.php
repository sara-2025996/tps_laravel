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
        Schema::create('participe', function (Blueprint $table) {
            $table->id();
            $table->foreignId('films_id')->references('id')->on('films');
            $table->foreignId('acteur_id')->references('id')->on('acteur');
            $table->string('role');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participe');
    }
};
