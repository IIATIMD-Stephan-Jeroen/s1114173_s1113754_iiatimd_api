<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class ArmorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //armor item teset
      DB::table('armor')->insert([
        'name' => 'padded',
        'armor_class' => 11,
        'dex_modifier' => true,
        'dex_modifier_max' => null,
        'strenght_needed' => null,
        'stealth_disadvantage' => true,
        'category' => 'light'
      ]);

      DB::table('armor')->insert([
        'name' => 'leather',
        'armor_class' => 11,
        'dex_modifier' => true,
        'dex_modifier_max' => null,
        'strenght_needed' => null,
        'stealth_disadvantage' => false,
        'category' => 'light'
      ]);

      DB::table('armor')->insert([
        'name' => 'studded leather',
        'armor_class' => 12,
        'dex_modifier' => true,
        'dex_modifier_max' => null,
        'strenght_needed' => null,
        'stealth_disadvantage' => false,
        'category' => 'light'
      ]);

      DB::table('armor')->insert([
        'name' => 'hide',
        'armor_class' => 12,
        'dex_modifier' => true,
        'dex_modifier_max' => 2,
        'strenght_needed' => null,
        'stealth_disadvantage' => false,
        'category' => 'medium'
      ]);

      DB::table('armor')->insert([
        'name' => 'chain shirt',
        'armor_class' => 13,
        'dex_modifier' => true,
        'dex_modifier_max' => 2,
        'strenght_needed' => null,
        'stealth_disadvantage' => false,
        'category' => 'medium'
      ]);

      DB::table('armor')->insert([
        'name' => 'scale mail',
        'armor_class' => 14,
        'dex_modifier' => true,
        'dex_modifier_max' => 2,
        'strenght_needed' => null,
        'stealth_disadvantage' => true,
        'category' => 'medium'
      ]);

      DB::table('armor')->insert([
        'name' => 'breastplate',
        'armor_class' => 14,
        'dex_modifier' => true,
        'dex_modifier_max' => 2,
        'strenght_needed' => null,
        'stealth_disadvantage' => false,
        'category' => 'medium'
      ]);

      DB::table('armor')->insert([
        'name' => 'half plate',
        'armor_class' => 15,
        'dex_modifier' => true,
        'dex_modifier_max' => 2,
        'strenght_needed' => null,
        'stealth_disadvantage' => true,
        'category' => 'medium'
      ]);

      DB::table('armor')->insert([
        'name' => 'ring mail',
        'armor_class' => 14,
        'dex_modifier' => false,
        'dex_modifier_max' => null,
        'strenght_needed' => null,
        'stealth_disadvantage' => true,
        'category' => 'heavy'
      ]);

      DB::table('armor')->insert([
        'name' => 'chain mail',
        'armor_class' => 16,
        'dex_modifier' => false,
        'dex_modifier_max' => null,
        'strenght_needed' => 13,
        'stealth_disadvantage' => true,
        'category' => 'heavy'
      ]);

      DB::table('armor')->insert([
        'name' => 'splint',
        'armor_class' => 17,
        'dex_modifier' => false,
        'dex_modifier_max' => null,
        'strenght_needed' => 15,
        'stealth_disadvantage' => true,
        'category' => 'heavy'
      ]);

      DB::table('armor')->insert([
        'name' => 'plate',
        'armor_class' => 18,
        'dex_modifier' => false,
        'dex_modifier_max' => null,
        'strenght_needed' => 15,
        'stealth_disadvantage' => true,
        'category' => 'heavy'
      ]);

      DB::table('armor')->insert([
        'name' => 'shield',
        'armor_class' => 2,
        'dex_modifier' => false,
        'dex_modifier_max' => null,
        'strenght_needed' => null,
        'stealth_disadvantage' => false,
        'category' => 'shield'
      ]);
    }
}
