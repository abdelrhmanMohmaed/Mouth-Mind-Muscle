<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KcalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kcals')->insert([
            [
                'type' => 'MILK Skimmed',
                'cho' => 12,
                'prot' => 8,
                'fat' => 3,
                'kcal' => 107,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'type' => 'MILK Low Fat',
                'cho' => 12,
                'prot' => 8,
                'fat' => 5,
                'kcal' => 125,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'type' => 'MILK Full Fat',
                'cho' => 12,
                'prot' => 8,
                'fat' => 8,
                'kcal' => 152,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'type' => 'VEGETABLE',
                'cho' => 5,
                'prot' => 2,
                'fat' => 0,
                'kcal' => 28,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'type' => 'FRUIT',
                'cho' => 15,
                'prot' => 0,
                'fat' => 0,
                'kcal' => 60,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'type' => 'STARCH',
                'cho' => 15,
                'prot' => 3,
                'fat' => 1,
                'kcal' => 81,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'type' => 'PROTEINS Lean Meat',
                'cho' => 0,
                'prot' => 7,
                'fat' => 3,
                'kcal' => 55,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'type' => 'PROTEINS Medium Fat',
                'cho' => 0,
                'prot' => 7,
                'fat' => 5,
                'kcal' => 73,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'type' => 'PROTEINS High Fat',
                'cho' => 0,
                'prot' => 7,
                'fat' => 0,
                'kcal' => 91,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'type' => 'FAT',
                'cho' => 0,
                'prot' => 0,
                'fat' => 5,
                'kcal' => 45,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'type' => 'HALFSTLMFAT Soup',
                'cho' => 7.50,
                'prot' => 5,
                'fat' => 4,
                'kcal' => 86,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'type' => 'HALFSTLMFAT Appetizer',
                'cho' => 7.50,
                'prot' => 5,
                'fat' => 4,
                'kcal' => 86,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'type' => 'STLMFAT Prepared Meals',
                'cho' => 15,
                'prot' => 10,
                'fat' => 9,
                'kcal' => 181,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'type' => 'STLMFAT Fast Food',
                'cho' => 15,
                'prot' => 10,
                'fat' => 9,
                'kcal' => 181,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'type' => 'BEVERAGES',
                'cho' => 15,
                'prot' => 0,
                'fat' => 0,
                'kcal' => 60,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'type' => 'ALCOHOL',
                'cho' => 4,
                'prot' => 0,
                'fat' => 5,
                'kcal' => 61,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'type' => 'CHO',
                'cho' => 15,
                'prot' => 0,
                'fat' => 0,
                'kcal' => 60,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'type' => 'MISCELLANEOUS',
                'cho' => 3,
                'prot' => 3,
                'fat' => 4,
                'kcal' => 60,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'type' => 'SUPPLEMENTS',
                'cho' => 3,
                'prot' => 3,
                'fat' => 4,
                'kcal' => 60,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
