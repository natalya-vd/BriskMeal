<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(RecipesSeeder::class);
        $this->call(PhotoSeeder::class);
        $this->call(IngredientsSeeder::class);
        $this->call(AllergensSeeder::class);
        $this->call(NutritionValuesSeeder::class);
        $this->call(PreferencesSeeder::class);
        $this->call(UnitsSeeder::class);
        $this->call(RecipesIngredientsSeeder::class);
    }
}
