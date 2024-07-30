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
        Schema::create('personajes', function (Blueprint $table) {
            $table->id();
            $table->string('heroname');
            $table->string('hero_img');
            $table->string('name');
            $table->string('role');
            $table->string('description');
            $table->string('primaryAtack');
            $table->string('pA_img');
            $table->string('secondaryAtack');
            $table->string('sA_img');
            $table->string('Ability_1');
            $table->string('a1_img');
            $table->string('Ability_2');
            $table->string('a2_img');
            $table->string('Ability_3');
            $table->string('a3_img');
            $table->string('UltimateAbility');
            $table->string('a4_img');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personajes');
    }
};
