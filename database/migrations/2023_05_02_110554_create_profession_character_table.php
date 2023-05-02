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
        Schema::create('profession_character', function (Blueprint $table) {
            $table->integer('profession_id')->unsigned();

            $table->integer('character_id')->unsigned();
        
            $table->foreign('character_id')->references('id')->on('characters')
        
                ->onDelete('cascade');
        
            $table->foreign('profession_id')->references('id')->on('professions')
        
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profession_character');
    }
};
