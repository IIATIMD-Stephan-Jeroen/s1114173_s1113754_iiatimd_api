<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class ConsumableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //consumable item test
      DB::table('consumables')->insert([
        'name' => 'arrows',
        'category' => 'Ammunition'
      ]);

      DB::table('consumables')->insert([
        'name' => 'blowgun needles',
        'category' => 'Ammunition'
      ]);

      DB::table('consumables')->insert([
        'name' => 'crossbow bolts',
        'category' => 'Ammunition'
      ]);

      DB::table('consumables')->insert([
        'name' => 'sling bullets',
        'category' => 'Ammunition'
      ]);

      DB::table('consumables')->insert([
        'name' => 'ball bearings',
        'category' => 'Consumable gear'
      ]);

      DB::table('consumables')->insert([
        'name' => 'caltrops',
        'category' => 'Consumable gear'
      ]);

      DB::table('consumables')->insert([
        'name' => 'chain',
        'category' => 'Consumable gear'
      ]);

      DB::table('consumables')->insert([
        'name' => 'spikes, iron',
        'category' => 'Consumable gear'
      ]);

      DB::table('consumables')->insert([
        'name' => 'potion of healing',
        'category' => 'potion of healing'
      ]);

      DB::table('consumables')->insert([
        'name' => 'rations',
        'category' => 'Food'
      ]);
    }
}
