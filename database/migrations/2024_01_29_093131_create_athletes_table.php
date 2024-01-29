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
        Schema::create('athletes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('biography');
            $table->date('dob');
            $table->integer('medal_gold')->default(0);
            $table->integer('medal_silver')->default(0);
            $table->unsignedBigInteger('country_id');
            $table->foreign('country_id')
            ->references('id')
            ->on('countries')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('athletes');
    }
};
