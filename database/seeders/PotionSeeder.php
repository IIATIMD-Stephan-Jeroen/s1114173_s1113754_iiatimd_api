<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class PotionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //consumable item test
      DB::table('potions')->insert([
        'name' => 'potion of healing',
        'healing' => '2d4 + 2'
      ]);
    }
}
