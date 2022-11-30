<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('activities')->insert([
            [
                'value' => '1.1',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'value' => '1.275',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'value' => '1.35',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'value' => '1.525',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
