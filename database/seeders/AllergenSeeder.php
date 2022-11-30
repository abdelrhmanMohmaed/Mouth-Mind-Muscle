<?php

namespace Database\Seeders;

use App\Models\Allergen;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AllergenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('allergens')->insert([
            [
                'name' => 'MILK',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'EGGS',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'PEANUTS',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'TREENUTS',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'WALNUTS',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'ALMOND',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'HAZELNUT',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'PECAN',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'CASHEW',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'PISTACHIO',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'SESAME',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'SOY',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'FISH',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'SHELLFISH',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'WHEAT',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'TRITICALE(hybrid grain created by crossing wheat and rye)',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'CARROT',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'AVOCADO',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'BELL PEPPER',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'CELERY',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'TRITICALE(HYBRID GRAIN FROM ',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'POTATO',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'PUMPIN',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'MUSHROOM',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'ONION',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'MUSTARD',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'SPICES',
                'created_at' => now(),
                'updated_at' => now(),
            ]

        ]);
    }
}
