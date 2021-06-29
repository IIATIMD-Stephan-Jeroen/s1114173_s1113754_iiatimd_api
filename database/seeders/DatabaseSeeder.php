<?php

namespace Database\Seeders;

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
        $this->call(ItemSeeder::class);
        $this->call(WeaponSeeder::class);
        $this->call(ArmorSeeder::class);
        $this->call(ConsumableSeeder::class);
        $this->call(PotionSeeder::class);
        $this->call(FocusSeeder::class);
        $this->call(ToolSeeder::class);
        $this->call(GearSeeder::class);
    }
}
