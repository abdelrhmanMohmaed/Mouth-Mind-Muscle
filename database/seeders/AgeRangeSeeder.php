<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AgeRangeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('age_ranges')->insert([

            [
                'name' => '10-15 YEARS OLD',
                'diet_type_id' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],  [
                'name' => '15-20 YEARS OLD',
                'diet_type_id' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '20-25 YRS OLD',
                'diet_type_id' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => '25-30 YEARS OLD',
                'diet_type_id' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '30-35 YEARS OLD',
                'diet_type_id' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '35-40 YEARS OLD',
                'diet_type_id' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],  [
                'name' => '40-45 YEARS OLD',
                'diet_type_id' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '45-50 YRS OLD',
                'diet_type_id' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => '50-55 YEARS OLD',
                'diet_type_id' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => '55-60 YEARS OLD',
                'diet_type_id' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '65+ YEARS OLD',
                'diet_type_id' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
