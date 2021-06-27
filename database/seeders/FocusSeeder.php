<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class FocusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //focus item test
      DB::table('focus')->insert([
        'name' => 'crystal',
        'category' => 'Arcane focus'
      ]);

      DB::table('focus')->insert([
        'name' => 'orb',
        'category' => 'Arcane focus'
      ]);

      DB::table('focus')->insert([
        'name' => 'rod',
        'category' => 'Arcane focus'
      ]);

      DB::table('focus')->insert([
        'name' => 'staff',
        'category' => 'Arcane focus'
      ]);

      DB::table('focus')->insert([
        'name' => 'wand',
        'category' => 'Arcane focus'
      ]);

      DB::table('focus')->insert([
        'name' => 'sprig of mistletoe',
        'category' => 'Druidic focus'
      ]);

      DB::table('focus')->insert([
        'name' => 'totem',
        'category' => 'Druidic focus'
      ]);

      DB::table('focus')->insert([
        'name' => 'wooden staff',
        'category' => 'Druidic focus'
      ]);

      DB::table('focus')->insert([
        'name' => 'yew wand',
        'category' => 'Druidic focus'
      ]);

      DB::table('focus')->insert([
        'name' => 'amulet',
        'category' => 'Holy symbol'
      ]);

      DB::table('focus')->insert([
        'name' => 'emblem',
        'category' => 'Holy symbol'
      ]);

      DB::table('focus')->insert([
        'name' => 'reliquary',
        'category' => 'Holy symbol'
      ]);
    }
}
