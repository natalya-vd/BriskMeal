<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes_allergens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('recipe_id')
                ->constrained('recipes')
                ->cascadeOnDelete();
            $table->foreignId('allergen_id')
                ->constrained('allergens')
                ->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipes_allergens');
    }
};
