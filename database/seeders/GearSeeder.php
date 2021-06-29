<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class GearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('consumables')->insert([
            'name' => 'gear',
            'category' => 'Adventuring gear'
            ]);
    }
}
