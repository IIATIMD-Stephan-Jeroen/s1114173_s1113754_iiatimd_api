<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class ToolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //tool item test
        DB::table('tools')->insert([
            'name' => 'Artisan tools',
            'category' => 'Artisan tools'
          ]);
  
          DB::table('tools')->insert([
            'name' => 'Disguise kit',
            'category' => 'Disguise kit'
          ]);
  
          DB::table('tools')->insert([
            'name' => 'Forgery kit',
            'category' => 'Forgery kit'
          ]);
  
          DB::table('tools')->insert([
            'name' => 'Gaming set',
            'category' => 'Gaming set'
          ]);
  
          DB::table('tools')->insert([
            'name' => 'Herbalism kit',
            'category' => 'Herbalism kit'
          ]);
  
          DB::table('tools')->insert([
            'name' => 'Musical instrument',
            'category' => 'Musical instrument'
          ]);
  
          DB::table('tools')->insert([
            'name' => "Navigator's tools",
            'category' => "Navigator's tools"
          ]);
  
          DB::table('tools')->insert([
            'name' => "Poisoner's kit",
            'category' => "Poisoner's kit"
          ]);
  
          DB::table('tools')->insert([
            'name' => "Thieves' tools",
            'category' => "Thieves' tools"
          ]);
    }
}
