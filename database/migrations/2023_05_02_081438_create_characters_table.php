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
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("name");
            $table->integer("level");
            $table->integer("hitpoints");

            $table->integer("strength");
            $table->integer("dexterity");
            $table->integer("constitution");
            $table->integer("intelligence");
            $table->integer("wisdom");
            $table->integer("charisma");

            $table->unsignedBigInteger('profession_id');

            $table->foreign('profession_id')->references('id')->on('characters');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('characters');
    }
};
