<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class WeaponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //weapon item test
        DB::table('weapons')->insert([
            'name' => 'club',
            'damage' => '1d4',
            'damage_type' => 'bludgeoning',
            'property_1' => 'light',
            'property_2' => null,
            'property_3' => null,
            'property_4' => null
          ]);
  
          DB::table('weapons')->insert([
            'name' => 'dagger',
            'damage' => '1d4',
            'damage_type' => 'piercing',
            'property_1' => 'finesse',
            'property_2' => 'light',
            'property_3' => 'thrown',
            'property_4' => null
          ]);
  
          DB::table('weapons')->insert([
            'name' => 'greatclub',
            'damage' => '1d8',
            'damage_type' => 'bludgeoning',
            'property_1' => 'two-handed',
            'property_2' => null,
            'property_3' => null,
            'property_4' => null
          ]);
  
          DB::table('weapons')->insert([
            'name' => 'handaxe',
            'damage' => '1d6',
            'damage_type' => 'slashing',
            'property_1' => 'light',
            'property_2' => 'thrown',
            'property_3' => null,
            'property_4' => null
          ]);
  
          DB::table('weapons')->insert([
            'name' => 'javelin',
            'damage' => '1d6',
            'damage_type' => 'piercing',
            'property_1' => 'thrown',
            'property_2' => null,
            'property_3' => null,
            'property_4' => null
          ]);
  
          DB::table('weapons')->insert([
            'name' => 'light hammer',
            'damage' => '1d4',
            'damage_type' => 'bludgeoning',
            'property_1' => 'light',
            'property_2' => 'thrown',
            'property_3' => null,
            'property_4' => null
          ]);
  
          DB::table('weapons')->insert([
            'name' => 'mace',
            'damage' => '1d6',
            'damage_type' => 'bludgeoning',
            'property_1' => null,
            'property_2' => null,
            'property_3' => null,
            'property_4' => null
          ]);
  
          DB::table('weapons')->insert([
            'name' => 'quarterstaff',
            'damage' => '1d6',
            'damage_type' => 'bludgeoning',
            'property_1' => 'versatile',
            'property_2' => null,
            'property_3' => null,
            'property_4' => null
          ]);
  
          DB::table('weapons')->insert([
            'name' => 'sickle',
            'damage' => '1d4',
            'damage_type' => 'slashing',
            'property_1' => 'light',
            'property_2' => null,
            'property_3' => null,
            'property_4' => null
          ]);
  
          DB::table('weapons')->insert([
            'name' => 'spear',
            'damage' => '1d6',
            'damage_type' => 'piercing',
            'property_1' => 'thrown',
            'property_2' => 'versatile',
            'property_3' => null,
            'property_4' => null
          ]);
  
          // simple ranged weapons
          //------------------------
  
          DB::table('weapons')->insert([
            'name' => 'light crossbow',
            'damage' => '1d8',
            'damage_type' => 'piercing',
            'property_1' => 'ammunition',
            'property_2' => 'loading',
            'property_3' => 'two-handed',
            'property_4' => null
          ]);
  
          DB::table('weapons')->insert([
            'name' => 'dart',
            'damage' => '1d4',
            'damage_type' => 'piercing',
            'property_1' => 'finesse',
            'property_2' => 'thrown',
            'property_3' => null,
            'property_4' => null
          ]);
  
          DB::table('weapons')->insert([
            'name' => 'shortbow',
            'damage' => '1d6',
            'damage_type' => 'piercing',
            'property_1' => 'ammunition',
            'property_2' => 'two-handed',
            'property_3' => null,
            'property_4' => null
          ]);
  
          DB::table('weapons')->insert([
            'name' => 'sling',
            'damage' => '1d4',
            'damage_type' => 'bludgeoning',
            'property_1' => 'ammunition',
            'property_2' => null,
            'property_3' => null,
            'property_4' => null
          ]);
  
          // martial melee weapons
          //----------------------
  
          DB::table('weapons')->insert([
            'name' => 'battleaxe',
            'damage' => '1d8',
            'damage_type' => 'slashing',
            'property_1' => 'versatile',
            'property_2' => null,
            'property_3' => null,
            'property_4' => null
          ]);
  
          DB::table('weapons')->insert([
            'name' => 'flail',
            'damage' => '1d8',
            'damage_type' => 'bludgeoning',
            'property_1' => null,
            'property_2' => null,
            'property_3' => null,
            'property_4' => null
          ]);
  
          DB::table('weapons')->insert([
            'name' => 'glaive',
            'damage' => '1d10',
            'damage_type' => 'slashing',
            'property_1' => 'heavy',
            'property_2' => 'reach',
            'property_3' => 'two-handed',
            'property_4' => null
          ]);
  
          DB::table('weapons')->insert([
            'name' => 'greataxe',
            'damage' => '1d12',
            'damage_type' => 'slashing',
            'property_1' => 'heavy',
            'property_2' => 'two-handed',
            'property_3' => null,
            'property_4' => null
          ]);
  
          DB::table('weapons')->insert([
            'name' => 'greatsword',
            'damage' => '2d6',
            'damage_type' => 'slashing',
            'property_1' => 'heavy',
            'property_2' => 'two-handed',
            'property_3' => null,
            'property_4' => null
          ]);
  
          DB::table('weapons')->insert([
            'name' => 'halberd',
            'damage' => '1d10',
            'damage_type' => 'slashing',
            'property_1' => 'heavy',
            'property_2' => 'reach',
            'property_3' => 'two-handed',
            'property_4' => null
          ]);
  
          DB::table('weapons')->insert([
            'name' => 'lance',
            'damage' => '1d12',
            'damage_type' => 'piercing',
            'property_1' => 'reach',
            'property_2' => 'special',
            'property_3' => null,
            'property_4' => null
          ]);
  
          DB::table('weapons')->insert([
            'name' => 'longsword',
            'damage' => '1d8',
            'damage_type' => 'slashing',
            'property_1' => 'versatile',
            'property_2' => null,
            'property_3' => null,
            'property_4' => null
          ]);
  
          DB::table('weapons')->insert([
            'name' => 'maul',
            'damage' => '2d6',
            'damage_type' => 'bludgeoning',
            'property_1' => 'heavy',
            'property_2' => 'two-handed',
            'property_3' => null,
            'property_4' => null
          ]);
  
          DB::table('weapons')->insert([
            'name' => 'morningstar',
            'damage' => '1d8',
            'damage_type' => 'piercing',
            'property_1' => null,
            'property_2' => null,
            'property_3' => null,
            'property_4' => null
          ]);
  
          DB::table('weapons')->insert([
            'name' => 'pike',
            'damage' => '1d10',
            'damage_type' => 'piercing',
            'property_1' => 'heavy',
            'property_2' => 'reach',
            'property_3' => 'two-handed',
            'property_4' => null
          ]);
  
          DB::table('weapons')->insert([
            'name' => 'rapier',
            'damage' => '1d8',
            'damage_type' => 'piercing',
            'property_1' => 'finesse',
            'property_2' => null,
            'property_3' => null,
            'property_4' => null
          ]);
  
          DB::table('weapons')->insert([
            'name' => 'scimitar',
            'damage' => '1d6',
            'damage_type' => 'slashing',
            'property_1' => 'finesse',
            'property_2' => 'light',
            'property_3' => null,
            'property_4' => null
          ]);
  
          DB::table('weapons')->insert([
            'name' => 'shortsword',
            'damage' => '1d6',
            'damage_type' => 'piercing',
            'property_1' => 'finesse',
            'property_2' => 'light',
            'property_3' => null,
            'property_4' => null
          ]);
  
          DB::table('weapons')->insert([
            'name' => 'trident',
            'damage' => '1d6',
            'damage_type' => 'piercing',
            'property_1' => 'thrown',
            'property_2' => 'versatile',
            'property_3' => null,
            'property_4' => null
          ]);
  
          DB::table('weapons')->insert([
            'name' => 'war pick',
            'damage' => '1d8',
            'damage_type' => 'piercing',
            'property_1' => null,
            'property_2' => null,
            'property_3' => null,
            'property_4' => null
          ]);
  
          DB::table('weapons')->insert([
            'name' => 'warhammer',
            'damage' => '1d8',
            'damage_type' => 'bludgeoning',
            'property_1' => 'versatile',
            'property_2' => null,
            'property_3' => null,
            'property_4' => null
          ]);
  
          DB::table('weapons')->insert([
            'name' => 'whip',
            'damage' => '1d4',
            'damage_type' => 'slashing',
            'property_1' => 'finesse',
            'property_2' => 'reach',
            'property_3' => null,
            'property_4' => null
          ]);
  
          // martial ranged weapons
          //-----------------------
  
          DB::table('weapons')->insert([
            'name' => 'blowgun',
            'damage' => '1',
            'damage_type' => 'piercing',
            'property_1' => 'ammunition',
            'property_2' => 'loading',
            'property_3' => null,
            'property_4' => null
          ]);
  
          DB::table('weapons')->insert([
            'name' => 'hand crossbow',
            'damage' => '1d6',
            'damage_type' => 'piercing',
            'property_1' => 'ammunition',
            'property_2' => 'light',
            'property_3' => 'loading',
            'property_4' => null
          ]);
  
          DB::table('weapons')->insert([
            'name' => 'heavy crossbow',
            'damage' => '1d10',
            'damage_type' => 'piercing',
            'property_1' => 'ammunition',
            'property_2' => 'heavy',
            'property_3' => 'loading',
            'property_4' => 'two-handed'
          ]);
  
          DB::table('weapons')->insert([
            'name' => 'longbow',
            'damage' => '1d8',
            'damage_type' => 'piercing',
            'property_1' => 'ammunition',
            'property_2' => 'heavy',
            'property_3' => 'two-handed',
            'property_4' => null
          ]);
  
          DB::table('weapons')->insert([
            'name' => 'net',
            'damage' => null,
            'damage_type' => null,
            'property_1' => 'special',
            'property_2' => 'thrown',
            'property_3' => null,
            'property_4' => null
          ]);
    }
}
