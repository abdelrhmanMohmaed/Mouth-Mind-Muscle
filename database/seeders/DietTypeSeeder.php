<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DietTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('diet_types')->insert([
            [
                'name' => 'INTERMITTENT FASTING',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'FODMAP DIET',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'VEGETARIAN',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'VEGAN',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'GLUTEN-FREE',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'OTHER TYPES',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'MULTIPLE SELECTION',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
