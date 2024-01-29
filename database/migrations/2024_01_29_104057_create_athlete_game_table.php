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
        Schema::create('athlete_game', function (Blueprint $table) {
            $table->unsignedBigInteger('game_id');
            $table->unsignedBigInteger('athlete_id');
            $table->foreign('athlete_id')->references('id')->on('athletes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('game_id')->references('id')->on('games')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('athlete_game');
    }
};
