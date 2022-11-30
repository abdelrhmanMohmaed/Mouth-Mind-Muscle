<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MacroDistributionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('macro_distributions')->insert([
            [
                'name' => 'GENERAL',
                'min_cho' => 45,
                'ideal_cho' => 40,
                'max_cho' =>  65,

                'min_protien' => 10,
                'ideal_protien' => 30,
                'max_protien' =>  35,

                'min_fat' => 20,
                'ideal_fat' => 30,
                'max_fat' => 35,

                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'PREGNANCY',
                'min_cho' => 45,
                'ideal_cho' => 55,
                'max_cho' =>  65,

                'min_protien' => 10,
                'ideal_protien' => 22.50,
                'max_protien' =>  35,

                'min_fat' => 20,
                'ideal_fat' => 27.50,
                'max_fat' => 35,

                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'FITNESS',
                'min_cho' => 45,
                'ideal_cho' => 55,
                'max_cho' =>  65,

                'min_protien' => 10,
                'ideal_protien' => 22.50,
                'max_protien' =>  35,

                'min_fat' => 20,
                'ideal_fat' => 27.50,
                'max_fat' => 35,

                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'MUSCLE GAIN(WT GAIN THEN MACRO DISTRIBUTION)',
                'min_cho' => 40,
                'ideal_cho' => 50,
                'max_cho' =>  60,

                'min_protien' => 25,
                'ideal_protien' => 30,
                'max_protien' =>  35,

                'min_fat' => 15,
                'ideal_fat' => 20,
                'max_fat' => 25,

                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'FAT LOSS(WT LOSS THEN MACRO DISTRIBUTION)',
                'min_cho' => 30,
                'ideal_cho' => 40,
                'max_cho' =>  45,

                'min_protien' => 25,
                'ideal_protien' => 30,
                'max_protien' =>  35,

                'min_fat' => 25,
                'ideal_fat' => 30,
                'max_fat' => 35,

                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'KETO',
                'min_cho' => 0,
                'ideal_cho' => 5,
                'max_cho' =>  0,

                'min_protien' => 0,
                'ideal_protien' => 25,
                'max_protien' =>  0,

                'min_fat' => 0,
                'ideal_fat' => 70,
                'max_fat' => 0,

                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => '1-Ectomorph',
                'min_cho' => 0,
                'ideal_cho' => 55,
                'max_cho' =>  0,

                'min_protien' => 0,
                'ideal_protien' => 25,
                'max_protien' =>  0,

                'min_fat' => 0,
                'ideal_fat' => 20,
                'max_fat' => 0,

                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => '2-Mesomorph',
                'min_cho' => 0,
                'ideal_cho' => 40,
                'max_cho' =>  0,

                'min_protien' => 0,
                'ideal_protien' => 30,
                'max_protien' =>  0,

                'min_fat' => 0,
                'ideal_fat' => 30,
                'max_fat' => 0,

                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => '3-Endomorph',
                'min_cho' => 0,
                'ideal_cho' => 25,
                'max_cho' =>  0,

                'min_protien' => 0,
                'ideal_protien' => 35,
                'max_protien' =>  0,

                'min_fat' => 0,
                'ideal_fat' => 40,
                'max_fat' => 0,

                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'DIABETES/DYSLIPIDEMIC',
                'min_cho' => 45,
                'ideal_cho' => 50,
                'max_cho' =>  55,

                'min_protien' => 15,
                'ideal_protien' => 20,
                'max_protien' =>  25,

                'min_fat' => 25,
                'ideal_fat' => 30,
                'max_fat' => 35,

                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'CKD',
                'min_cho' => 0,
                'ideal_cho' => 0,
                'max_cho' =>  0,

                'min_protien' => 0,
                'ideal_protien' => 0,
                'max_protien' =>  0,

                'min_fat' => 0,
                'ideal_fat' => 0,
                'max_fat' => 0,

                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
