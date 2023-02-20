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
        Schema::create('recipes_nutrition_val', function (Blueprint $table) {
            $table->id();
            $table->foreignId('recipe_id')
                ->constrained('recipes')
                ->cascadeOnDelete();
            $table->foreignId('nutrition_val_id')
                ->constrained('nutrition_values')
                ->cascadeOnDelete();
            $table->float('count');
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
        Schema::dropIfExists('recipes_nutrition_val');
    }
};
