<?php

namespace Database\Seeders;

use App\Models\AgeRange;
use App\Models\DietType;
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
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            ActivitySeeder::class,
            DietTypeSeeder::class,
            KcalSeeder::class,
            MacroDistributionSeeder::class,
            AgeRangeSeeder::class,
            AllergenSeeder::class,
        ]);
    }
}
