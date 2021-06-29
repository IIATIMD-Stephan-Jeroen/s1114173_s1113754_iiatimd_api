<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            'name' => 'Club',
            'cost' => 10,
            'currency' => 'silver',
            'type' => 'club',
            'weight' => 2
          ]);
  
          DB::table('items')->insert([
            'name' => 'Dagger',
            'cost' => 200,
            'currency' => 'gold',
            'type' => 'dagger',
            'weight' => 1
          ]);
  
          DB::table('items')->insert([
            'name' => 'Greatclub',
            'cost' => 200,
            'currency' => 'silver',
            'type' => 'greatclub',
            'weight' => 10
          ]);
  
          DB::table('items')->insert([
            'name' => 'Handaxe',
            'cost' => 500,
            'currency' => 'gold',
            'type' => 'handaxe',
            'weight' => 2
          ]);
  
          DB::table('items')->insert([
            'name' => 'Javelin',
            'cost' => 50,
            'currency' => 'silver',
            'type' => 'javelin',
            'weight' => 2
          ]);
  
          DB::table('items')->insert([
            'name' => 'Light hammer',
            'cost' => 200,
            'currency' => 'gold',
            'type' => 'light hammer',
            'weight' => 2
          ]);
  
          DB::table('items')->insert([
            'name' => 'mace',
            'cost' => 500,
            'currency' => 'gold',
            'type' => 'mace',
            'weight' => 4
          ]);
  
          DB::table('items')->insert([
            'name' => 'Quarterstaff',
            'cost' => 20,
            'currency' => 'silver',
            'type' => 'quarterstaff',
            'weight' => 4
          ]);
  
          DB::table('items')->insert([
            'name' => 'Sickle',
            'cost' => 100,
            'currency' => 'gold',
            'type' => 'sickle',
            'weight' => 2
          ]);
  
          DB::table('items')->insert([
            'name' => 'Spear',
            'cost' => 100,
            'currency' => 'gold',
            'type' => 'spear',
            'weight' => 3
          ]);
  
          // simple ranged weapons
          //------------------------
  
          DB::table('items')->insert([
            'name' => 'Light crossbow',
            'cost' => 2500,
            'currency' => 'gold',
            'type' => 'light crossbow',
            'weight' => 5
          ]);
  
          DB::table('items')->insert([
            'name' => 'Dart',
            'cost' => 5,
            'currency' => 'copper',
            'type' => 'dart',
            'weight' => 0.25
          ]);
  
          DB::table('items')->insert([
            'name' => 'Shortbow',
            'cost' => 2500,
            'currency' => 'gold',
            'type' => 'shortbow',
            'weight' => 2
          ]);
  
          DB::table('items')->insert([
            'name' => 'Sling',
            'cost' => 10,
            'currency' => 'silver',
            'type' => 'sling',
            'weight' => 0
          ]);
  
          // martial melee weapons
          // --------------------
  
          DB::table('items')->insert([
            'name' => 'Battleaxe',
            'cost' => 1000,
            'currency' => 'gold',
            'type' => 'battleaxe',
            'weight' => 4
          ]);
  
          DB::table('items')->insert([
            'name' => 'Flail',
            'cost' => 1000,
            'currency' => 'gold',
            'type' => 'flail',
            'weight' => 2
          ]);
  
          DB::table('items')->insert([
            'name' => 'Glaive',
            'cost' => 2000,
            'currency' => 'gold',
            'type' => 'glaive',
            'weight' => 6
          ]);
  
          DB::table('items')->insert([
            'name' => 'Greataxe',
            'cost' => 3000,
            'currency' => 'gold',
            'type' => 'greataxe',
            'weight' => 7
          ]);
  
          DB::table('items')->insert([
            'name' => 'Greatsword',
            'cost' => 5000,
            'currency' => 'gold',
            'type' => 'greatsword',
            'weight' => 6
          ]);
  
          DB::table('items')->insert([
            'name' => 'Halberd',
            'cost' => 2000,
            'currency' => 'gold',
            'type' => 'halberd',
            'weight' => 6
          ]);
  
          DB::table('items')->insert([
            'name' => 'Lance',
            'cost' => 1000,
            'currency' => 'gold',
            'type' => 'lance',
            'weight' => 6
          ]);
  
          DB::table('items')->insert([
            'name' => 'Longsword',
            'cost' => 1500,
            'currency' => 'gold',
            'type' => 'longsword',
            'weight' => 3
          ]);
  
          DB::table('items')->insert([
            'name' => 'Maul',
            'cost' => 1000,
            'currency' => 'gold',
            'type' => 'maul',
            'weight' => 10
          ]);
  
          DB::table('items')->insert([
            'name' => 'Morningstar',
            'cost' => 1500,
            'currency' => 'gold',
            'type' => 'morningstar',
            'weight' => 4
          ]);
  
          DB::table('items')->insert([
            'name' => 'Pike',
            'cost' => 500,
            'currency' => 'gold',
            'type' => 'javelin',
            'weight' => 18
          ]);
  
          DB::table('items')->insert([
            'name' => 'Rapier',
            'cost' => 2500,
            'currency' => 'gold',
            'type' => 'rapier',
            'weight' => 2
          ]);
  
          DB::table('items')->insert([
            'name' => 'Scimitar',
            'cost' => 2500,
            'currency' => 'gold',
            'type' => 'scimitar',
            'weight' => 3
          ]);
  
          DB::table('items')->insert([
            'name' => 'Shortsword',
            'cost' => 1000,
            'currency' => 'gold',
            'type' => 'shortsword',
            'weight' => 2
          ]);
  
          DB::table('items')->insert([
            'name' => 'Trident',
            'cost' => 500,
            'currency' => 'gold',
            'type' => 'trident',
            'weight' => 4
          ]);
  
          DB::table('items')->insert([
            'name' => 'War pick',
            'cost' => 500,
            'currency' => 'gold',
            'type' => 'war pick',
            'weight' => 2
          ]);
  
          DB::table('items')->insert([
            'name' => 'Warhammer',
            'cost' => 1500,
            'currency' => 'gold',
            'type' => 'warhammer',
            'weight' => 2
          ]);
  
          DB::table('items')->insert([
            'name' => 'Whip',
            'cost' => 200,
            'currency' => 'gold',
            'type' => 'whip',
            'weight' => 3
          ]);
  
          // martial ranged weapons
          //------------------------
  
          DB::table('items')->insert([
            'name' => 'Blowgun',
            'cost' => 1000,
            'currency' => 'gold',
            'type' => 'blowgun',
            'weight' => 1
          ]);
  
          DB::table('items')->insert([
            'name' => 'Hand crossbow',
            'cost' => 7500,
            'currency' => 'gold',
            'type' => 'hand crossbow',
            'weight' => 3
          ]);
  
          DB::table('items')->insert([
            'name' => 'Heavy crossbow',
            'cost' => 5000,
            'currency' => 'gold',
            'type' => 'heavy crossbow',
            'weight' => 18
          ]);
  
          DB::table('items')->insert([
            'name' => 'Longbow',
            'cost' => 5000,
            'currency' => 'gold',
            'type' => 'longbow',
            'weight' => 2
          ]);
  
          DB::table('items')->insert([
            'name' => 'Net',
            'cost' => 100,
            'currency' => 'gold',
            'type' => 'net',
            'weight' => 3
          ]);
  
  
  //--------------
  //  ARMOR
  //--------------
  
          //Light armor
          //-----------
          DB::table('items')->insert([
            'name' => 'Padded',
            'cost' => 500,
            'currency' => 'gold',
            'type' => 'padded',
            'weight' => 8
          ]);
  
          DB::table('items')->insert([
            'name' => 'Leather',
            'cost' => 1000,
            'currency' => 'gold',
            'type' => 'leather',
            'weight' => 10
          ]);
  
          DB::table('items')->insert([
            'name' => 'Studded leather',
            'cost' => 4500,
            'currency' => 'gold',
            'type' => 'studded leather',
            'weight' => 13
          ]);
  
          // Medium armor
          //--------------
          DB::table('items')->insert([
            'name' => 'Hide',
            'cost' => 1000,
            'currency' => 'gold',
            'type' => 'hide',
            'weight' => 12
          ]);
  
          DB::table('items')->insert([
            'name' => 'Chain shirt',
            'cost' => 5000,
            'currency' => 'gold',
            'type' => 'chain shirt',
            'weight' => 20
          ]);
  
          DB::table('items')->insert([
            'name' => 'Scale mail',
            'cost' => 5000,
            'currency' => 'gold',
            'type' => 'scale mail',
            'weight' => 45
          ]);
  
          DB::table('items')->insert([
            'name' => 'Breastplate',
            'cost' => 40000,
            'currency' => 'gold',
            'type' => 'breastplate',
            'weight' => 20
          ]);
  
          DB::table('items')->insert([
            'name' => 'Half plate',
            'cost' => 75000,
            'currency' => 'gold',
            'type' => 'half plate',
            'weight' => 40
          ]);
  
          // Heavy armor
          //------------
          DB::table('items')->insert([
            'name' => 'Ring mail',
            'cost' => 3000,
            'currency' => 'gold',
            'type' => 'ring mail',
            'weight' => 40
          ]);
  
          DB::table('items')->insert([
            'name' => 'Chain mail',
            'cost' => 7500,
            'currency' => 'gold',
            'type' => 'chain mail',
            'weight' => 55
          ]);
  
          DB::table('items')->insert([
            'name' => 'Splint',
            'cost' => 20000,
            'currency' => 'gold',
            'type' => 'splint',
            'weight' => 60
          ]);
  
          DB::table('items')->insert([
            'name' => 'Plate',
            'cost' => 150000,
            'currency' => 'gold',
            'type' => 'plate',
            'weight' => 65
          ]);
  
          // Shield
          //-------
          DB::table('items')->insert([
            'name' => 'Shield',
            'cost' => 1000,
            'currency' => 'gold',
            'type' => 'shield',
            'weight' => 6
          ]);
  
  //--------------
  //  TOOLS
  //--------------
          //artisan tools
          DB::table('items')->insert([
            'name' => "Alchemist's supplies",
            'cost' => 5000,
            'currency' => 'gold',
            'type' => 'Artisan tools',
            'weight' => 8
          ]);
  
          DB::table('items')->insert([
            'name' => "brewers's supplies",
            'cost' => 2000,
            'currency' => 'gold',
            'type' => 'Artisan tools',
            'weight' => 9
          ]);
  
          DB::table('items')->insert([
            'name' => "Calligrapher's supplies",
            'cost' => 1000,
            'currency' => 'gold',
            'type' => 'Artisan tools',
            'weight' => 5
          ]);
  
          DB::table('items')->insert([
            'name' => "Capenter's tools",
            'cost' => 800,
            'currency' => 'gold',
            'type' => 'Artisan tools',
            'weight' => 6
          ]);
  
          DB::table('items')->insert([
            'name' => "Cartographer's tools",
            'cost' => 1500,
            'currency' => 'gold',
            'type' => 'Artisan tools',
            'weight' => 6
          ]);
  
          DB::table('items')->insert([
            'name' => "Cobbler's tools",
            'cost' => 500,
            'currency' => 'gold',
            'type' => 'Artisan tools',
            'weight' => 5
          ]);
  
          DB::table('items')->insert([
            'name' => "Cook's utensils",
            'cost' => 100,
            'currency' => 'gold',
            'type' => 'Artisan tools',
            'weight' => 8
          ]);
  
          DB::table('items')->insert([
            'name' => "Glasblower's tools",
            'cost' => 3000,
            'currency' => 'gold',
            'type' => 'Artisan tools',
            'weight' => 5
          ]);
  
          DB::table('items')->insert([
            'name' => "Jeweler's tools",
            'cost' => 2500,
            'currency' => 'gold',
            'type' => 'Artisan tools',
            'weight' => 2
          ]);
  
          DB::table('items')->insert([
            'name' => "Leatherworker's tools",
            'cost' => 500,
            'currency' => 'gold',
            'type' => 'Artisan tools',
            'weight' => 5
          ]);
  
          DB::table('items')->insert([
            'name' => "Mason's tools",
            'cost' => 1000,
            'currency' => 'gold',
            'type' => 'Artisan tools',
            'weight' => 8
          ]);
  
          DB::table('items')->insert([
            'name' => "Painter's supplies",
            'cost' => 1000,
            'currency' => 'gold',
            'type' => 'Artisan tools',
            'weight' => 5
          ]);
  
          DB::table('items')->insert([
            'name' => "Potter's tools",
            'cost' => 1000,
            'currency' => 'gold',
            'type' => 'Artisan tools',
            'weight' => 3
          ]);
  
          DB::table('items')->insert([
            'name' => "Smith's tools",
            'cost' => 2000,
            'currency' => 'gold',
            'type' => 'Artisan tools',
            'weight' => 8
          ]);
  
          DB::table('items')->insert([
            'name' => "Tinker's tools",
            'cost' => 5000,
            'currency' => 'gold',
            'type' => 'Artisan tools',
            'weight' => 10
          ]);
  
          DB::table('items')->insert([
            'name' => "Weaver's tools",
            'cost' => 100,
            'currency' => 'gold',
            'type' => 'Artisan tools',
            'weight' => 5
          ]);
  
          DB::table('items')->insert([
            'name' => "Woodcarver's tools",
            'cost' => 100,
            'currency' => 'gold',
            'type' => 'Artisan tools',
            'weight' => 5
          ]);
          //END OF ARTISAN TOOLS
  
          DB::table('items')->insert([
            'name' => "Disguise kit",
            'cost' => 2500,
            'currency' => 'gold',
            'type' => 'Disguise kit',
            'weight' => 3
          ]);
  
          DB::table('items')->insert([
            'name' => "Forgery kit",
            'cost' => 1500,
            'currency' => 'gold',
            'type' => 'Forgery kit',
            'weight' => 5
          ]);
  
          //gaming set
          DB::table('items')->insert([
            'name' => "Dice set",
            'cost' => 10,
            'currency' => 'silver',
            'type' => 'Gaming set',
            'weight' => 0
          ]);
  
          DB::table('items')->insert([
            'name' => "Dragonchess set",
            'cost' => 100,
            'currency' => 'gold',
            'type' => 'Gaming set',
            'weight' => 0.5
          ]);
  
          DB::table('items')->insert([
            'name' => "Playing card set",
            'cost' => 50,
            'currency' => 'silver',
            'type' => 'Gaming set',
            'weight' => 0
          ]);
  
          DB::table('items')->insert([
            'name' => "Three Dragon Ante set",
            'cost' => 100,
            'currency' => 'gold',
            'type' => 'Gaming set',
            'weight' => 0
          ]);
          // END OF GAMING SET
  
          DB::table('items')->insert([
            'name' => "Herbalism kit",
            'cost' => 500,
            'currency' => 'gold',
            'type' => 'Herbalism kit',
            'weight' => 3
          ]);
  
          // musical instruments
          DB::table('items')->insert([
            'name' => "Bagpipes",
            'cost' => 3000,
            'currency' => 'gold',
            'type' => 'Musical instrument',
            'weight' => 6
          ]);
  
          DB::table('items')->insert([
            'name' => "Drum",
            'cost' => 600,
            'currency' => 'gold',
            'type' => 'Musical instrument',
            'weight' => 3
          ]);
  
          DB::table('items')->insert([
            'name' => "Dulcimer",
            'cost' => 2500,
            'currency' => 'gold',
            'type' => 'Musical instrument',
            'weight' => 10
          ]);
  
          DB::table('items')->insert([
            'name' => "Flute",
            'cost' => 200,
            'currency' => 'gold',
            'type' => 'Musical instrument',
            'weight' => 1
          ]);
  
          DB::table('items')->insert([
            'name' => "Lute",
            'cost' => 3500,
            'currency' => 'gold',
            'type' => 'Musical instrument',
            'weight' => 2
          ]);
  
          DB::table('items')->insert([
            'name' => "Lyre",
            'cost' => 3000,
            'currency' => 'gold',
            'type' => 'Musical instrument',
            'weight' => 2
          ]);
  
          DB::table('items')->insert([
            'name' => "Pan flute",
            'cost' => 1200,
            'currency' => 'gold',
            'type' => 'Musical instrument',
            'weight' => 2
          ]);
  
          DB::table('items')->insert([
            'name' => "Shawm",
            'cost' => 200,
            'currency' => 'gold',
            'type' => 'Musical instrument',
            'weight' => 1
          ]);
  
          DB::table('items')->insert([
            'name' => "Viol",
            'cost' => 300,
            'currency' => 'gold',
            'type' => 'Musical instrument',
            'weight' => 1
          ]);
          // END OF MUSICAL INSTRUMENTS
  
          DB::table('items')->insert([
            'name' => "Navigator's tools",
            'cost' => 2500,
            'currency' => 'gold',
            'type' => "Navigator's tools",
            'weight' => 2
          ]);
  
          DB::table('items')->insert([
            'name' => "Poisoner's kit",
            'cost' => 5000,
            'currency' => 'gold',
            'type' => "Poisoner's kit",
            'weight' => 2
          ]);
  
          DB::table('items')->insert([
            'name' => "Thieves' tools",
            'cost' => 2500,
            'currency' => 'gold',
            'type' => "Thieves' tools",
            'weight' => 1
          ]);
  
  
  //--------------
  //  CONSUMABLES
  //--------------
  
          //consumable item test
          DB::table('items')->insert([
            'name' => 'Arrows',
            'cost' => 5,
            'currency' => 'copper',
            'type' => 'arrows',
            'weight' => 0.05
          ]);
  
          DB::table('items')->insert([
            'name' => 'Blowgun needles',
            'cost' => 2,
            'currency' => 'copper',
            'type' => 'blowgun needles',
            'weight' => 0.02
          ]);
  
          DB::table('items')->insert([
            'name' => 'Crossbow bolts',
            'cost' => 5,
            'currency' => 'copper',
            'type' => 'crossbow bolts',
            'weight' => 0.075
          ]);
  
          DB::table('items')->insert([
            'name' => 'Sling bullets',
            'cost' => 0.2,
            'currency' => 'copper',
            'type' => 'sling bullets',
            'weight' => 0.075
          ]);
  
          DB::table('items')->insert([
            'name' => 'Ball bearings',
            'cost' => 0.1,
            'currency' => 'copper',
            'type' => 'ball bearings',
            'weight' => 0.002
          ]);
  
          DB::table('items')->insert([
            'name' => 'Caltrops',
            'cost' => 5,
            'currency' => 'copper',
            'type' => 'caltrops',
            'weight' => 0.1
          ]);
  
          DB::table('items')->insert([
            'name' => 'Chain',
            'cost' => 50,
            'currency' => 'silver',
            'type' => 'chain',
            'weight' => 1
          ]);
  
          DB::table('items')->insert([
            'name' => 'Potion of healing',
            'cost' => 5000,
            'currency' => 'gold',
            'type' => 'potion of healing',
            'weight' => 0.5
          ]);
  
          DB::table('items')->insert([
            'name' => 'Rations',
            'cost' => 50,
            'currency' => 'silver',
            'type' => 'rations',
            'weight' => 2
          ]);
  
          DB::table('items')->insert([
            'name' => 'Spikes, iron',
            'cost' => 10,
            'currency' => 'silver',
            'type' => 'spikes, iron',
            'weight' => 0.5
          ]);
  
  //--------------
  //  FOCUS
  //--------------
  
          //focus item test
          DB::table('items')->insert([
            'name' => 'Crystal',
            'cost' => 1000,
            'currency' => 'gold',
            'type' => 'crystal',
            'weight' => 1
          ]);
  
          DB::table('items')->insert([
            'name' => 'Orb',
            'cost' => 2000,
            'currency' => 'gold',
            'type' => 'orb',
            'weight' => 3
          ]);
  
          DB::table('items')->insert([
            'name' => 'Rod',
            'cost' => 1000,
            'currency' => 'gold',
            'type' => 'rod',
            'weight' => 2
          ]);
  
          DB::table('items')->insert([
            'name' => 'Staff',
            'cost' => 500,
            'currency' => 'gold',
            'type' => 'staff',
            'weight' => 4
          ]);
  
          DB::table('items')->insert([
            'name' => 'Wand',
            'cost' => 1000,
            'currency' => 'gold',
            'type' => 'wand',
            'weight' => 1
          ]);
  
          DB::table('items')->insert([
            'name' => 'Sprig of mistletoe',
            'cost' => 100,
            'currency' => 'gold',
            'type' => 'sprig of mistletoe',
            'weight' => 0
          ]);
  
          DB::table('items')->insert([
            'name' => 'Totem',
            'cost' => 100,
            'currency' => 'gold',
            'type' => 'totem',
            'weight' => 0
          ]);
  
          DB::table('items')->insert([
            'name' => 'Wooden staff',
            'cost' => 500,
            'currency' => 'gold',
            'type' => 'wooden staff',
            'weight' => 4
          ]);
  
          DB::table('items')->insert([
            'name' => 'Yew wand',
            'cost' => 1000,
            'currency' => 'gold',
            'type' => 'yew wand',
            'weight' => 1
          ]);
  
          DB::table('items')->insert([
            'name' => 'Amulet',
            'cost' => 500,
            'currency' => 'gold',
            'type' => 'amulet',
            'weight' => 1
          ]);
  
          DB::table('items')->insert([
            'name' => 'Emblem',
            'cost' => 500,
            'currency' => 'gold',
            'type' => 'emblem',
            'weight' => 0
          ]);
  
          DB::table('items')->insert([
            'name' => 'Reliquary',
            'cost' => 500,
            'currency' => 'gold',
            'type' => 'reliquary',
            'weight' => 2
          ]);
  
  //-------------------
  //  Adventuring Gear
  //-------------------
  
          DB::table('items')->insert([
            'name' => 'Abacus',
            'cost' => 200,
            'currency' => 'gold',
            'type' => 'gear',
            'weight' => 2
          ]);
  
          DB::table('items')->insert([
            'name' => 'Acid (vial)',
            'cost' => 2500,
            'currency' => 'gold',
            'type' => 'gear',
            'weight' => 1
          ]);
  
          DB::table('items')->insert([
            'name' => "Alchemist's fire (flask)",
            'cost' => 5000,
            'currency' => 'gold',
            'type' => 'gear',
            'weight' => 1
          ]);
  
          DB::table('items')->insert([
            'name' => 'Antitoxin (vial)',
            'cost' => 5000,
            'currency' => 'gold',
            'type' => 'gear',
            'weight' => 0
          ]);
  
          DB::table('items')->insert([
            'name' => 'Backpack',
            'cost' => 200,
            'currency' => 'gold',
            'type' => 'gear',
            'weight' => 5
          ]);
  
          DB::table('items')->insert([
            'name' => 'Barrel',
            'cost' => 200,
            'currency' => 'gold',
            'type' => 'gear',
            'weight' => 70
          ]);
  
          DB::table('items')->insert([
            'name' => 'Basket',
            'cost' => 40,
            'currency' => 'silver',
            'type' => 'gear',
            'weight' => 2
          ]);
  
          DB::table('items')->insert([
            'name' => 'Bedroll',
            'cost' => 100,
            'currency' => 'gold',
            'type' => 'gear',
            'weight' => 7
          ]);
  
          DB::table('items')->insert([
            'name' => 'Bell',
            'cost' => 100,
            'currency' => 'gold',
            'type' => 'gear',
            'weight' => 0
          ]);
  
          DB::table('items')->insert([
            'name' => 'Blanket',
            'cost' => 50,
            'currency' => 'silver',
            'type' => 'gear',
            'weight' => 3
          ]);
  
          DB::table('items')->insert([
            'name' => 'Block and tackle',
            'cost' => 100,
            'currency' => 'gold',
            'type' => 'gear',
            'weight' => 5
          ]);
  
          DB::table('items')->insert([
            'name' => 'Book',
            'cost' => 2500,
            'currency' => 'gold',
            'type' => 'gear',
            'weight' => 5
          ]);
  
          DB::table('items')->insert([
            'name' => 'Bottle, glass',
            'cost' => 200,
            'currency' => 'gold',
            'type' => 'gear',
            'weight' => 2
          ]);
  
          DB::table('items')->insert([
            'name' => 'Bucket',
            'cost' => 5,
            'currency' => 'copper',
            'type' => 'gear',
            'weight' => 2
          ]);
  
          DB::table('items')->insert([
            'name' => 'Candle',
            'cost' => 1,
            'currency' => 'copper',
            'type' => 'gear',
            'weight' => 0
          ]);
  
          DB::table('items')->insert([
            'name' => 'Case, crossbow bolt',
            'cost' => 100,
            'currency' => 'gold',
            'type' => 'gear',
            'weight' => 1
          ]);
  
          DB::table('items')->insert([
            'name' => 'Case, map or scroll',
            'cost' => 100,
            'currency' => 'gold',
            'type' => 'gear',
            'weight' => 1
          ]);
  
          DB::table('items')->insert([
            'name' => 'Chalk (1 piece)',
            'cost' => 1,
            'currency' => 'copper',
            'type' => 'gear',
            'weight' => 0
          ]);
  
          DB::table('items')->insert([
            'name' => 'Chest',
            'cost' => 500,
            'currency' => 'gold',
            'type' => 'gear',
            'weight' => 25
          ]);
  
          DB::table('items')->insert([
            'name' => "Climber's kit",
            'cost' => 2500,
            'currency' => 'gold',
            'type' => 'gear',
            'weight' => 12
          ]);
  
          DB::table('items')->insert([
            'name' => 'Clothes, common',
            'cost' => 50,
            'currency' => 'silver',
            'type' => 'gear',
            'weight' => 3
          ]);
  
          DB::table('items')->insert([
            'name' => 'Clothes, costume',
            'cost' => 500,
            'currency' => 'gold',
            'type' => 'gear',
            'weight' => 4
          ]);
  
          DB::table('items')->insert([
            'name' => 'Clothes, fine',
            'cost' => 1500,
            'currency' => 'gold',
            'type' => 'gear',
            'weight' => 6
          ]);
  
          DB::table('items')->insert([
            'name' => "Clothes, travelers'",
            'cost' => 200,
            'currency' => 'gold',
            'type' => 'gear',
            'weight' => 4
          ]);
  
          DB::table('items')->insert([
            'name' => 'Component pouch',
            'cost' => 2500,
            'currency' => 'gold',
            'type' => 'gear',
            'weight' => 2
          ]);
  
          DB::table('items')->insert([
            'name' => 'Crowbar',
            'cost' => 200,
            'currency' => 'gold',
            'type' => 'gear',
            'weight' => 5
          ]);
  
          DB::table('items')->insert([
            'name' => 'Fishing tackle',
            'cost' => 100,
            'currency' => 'gold',
            'type' => 'gear',
            'weight' => 4
          ]);
  
          DB::table('items')->insert([
            'name' => 'Flask or tankard',
            'cost' => 2,
            'currency' => 'copper',
            'type' => 'gear',
            'weight' => 1
          ]);
  
          DB::table('items')->insert([
            'name' => 'Grappling hook',
            'cost' => 200,
            'currency' => 'gold',
            'type' => 'gear',
            'weight' => 4
          ]);
  
          DB::table('items')->insert([
            'name' => 'Hammer',
            'cost' => 100,
            'currency' => 'gold',
            'type' => 'gear',
            'weight' => 3
          ]);
  
          DB::table('items')->insert([
            'name' => 'Hammer, sledge',
            'cost' => 200,
            'currency' => 'gold',
            'type' => 'gear',
            'weight' => 10
          ]);
  
          DB::table('items')->insert([
            'name' => "Healer's kit",
            'cost' => 500,
            'currency' => 'gold',
            'type' => 'gear',
            'weight' => 3
          ]);
  
          DB::table('items')->insert([
            'name' => 'Holy water (flask)',
            'cost' => 2500,
            'currency' => 'gold',
            'type' => 'gear',
            'weight' => 1
          ]);
  
          DB::table('items')->insert([
            'name' => 'Hourglass',
            'cost' => 2500,
            'currency' => 'gold',
            'type' => 'gear',
            'weight' => 1
          ]);
  
          DB::table('items')->insert([
            'name' => 'Hunting trap',
            'cost' => 500,
            'currency' => 'gold',
            'type' => 'gear',
            'weight' => 25
          ]);
  
          DB::table('items')->insert([
            'name' => 'Ink (1 ounce bottle)',
            'cost' => 1000,
            'currency' => 'gold',
            'type' => 'gear',
            'weight' => 0
          ]);
  
          DB::table('items')->insert([
            'name' => 'Jug or pitcher',
            'cost' => 2,
            'currency' => 'copper',
            'type' => 'gear',
            'weight' => 4
          ]);
  
          DB::table('items')->insert([
            'name' => 'Ladder (10-foot)',
            'cost' => 10,
            'currency' => 'silver',
            'type' => 'gear',
            'weight' => 25
          ]);
  
          DB::table('items')->insert([
            'name' => 'Lamp',
            'cost' => 50,
            'currency' => 'silver',
            'type' => 'gear',
            'weight' => 1
          ]);
  
          DB::table('items')->insert([
            'name' => 'Lantern, bullseye',
            'cost' => 1000,
            'currency' => 'gold',
            'type' => 'gear',
            'weight' => 2
          ]);
  
          DB::table('items')->insert([
            'name' => 'Lantern, hooded',
            'cost' => 500,
            'currency' => 'gold',
            'type' => 'gear',
            'weight' => 2
          ]);
  
          DB::table('items')->insert([
            'name' => 'Lock',
            'cost' => 1000,
            'currency' => 'gold',
            'type' => 'gear',
            'weight' => 1
          ]);
  
          DB::table('items')->insert([
            'name' => 'Magnifying glass',
            'cost' => 10000,
            'currency' => 'gold',
            'type' => 'gear',
            'weight' => 0
          ]);
  
          DB::table('items')->insert([
            'name' => 'Manacles',
            'cost' => 200,
            'currency' => 'gold',
            'type' => 'gear',
            'weight' => 6
          ]);
  
          DB::table('items')->insert([
            'name' => 'Mess kit',
            'cost' => 20,
            'currency' => 'silver',
            'type' => 'gear',
            'weight' => 1
          ]);
  
          DB::table('items')->insert([
            'name' => 'Mirror, steel',
            'cost' => 500,
            'currency' => 'gold',
            'type' => 'gear',
            'weight' => 0.5
          ]);
  
          DB::table('items')->insert([
            'name' => 'Oil (flask)',
            'cost' => 10,
            'currency' => 'silver',
            'type' => 'gear',
            'weight' => 1
          ]);
  
          DB::table('items')->insert([
            'name' => 'Paper (one sheet)',
            'cost' => 20,
            'currency' => 'silver',
            'type' => 'gear',
            'weight' => 0
          ]);
  
          DB::table('items')->insert([
            'name' => 'Parchment (one sheet)',
            'cost' => 10,
            'currency' => 'silver',
            'type' => 'gear',
            'weight' => 0
          ]);
  
          DB::table('items')->insert([
            'name' => 'Perfume (vial)',
            'cost' => 500,
            'currency' => 'gold',
            'type' => 'gear',
            'weight' => 0
          ]);
  
          DB::table('items')->insert([
            'name' => "Pick, miner's",
            'cost' => 200,
            'currency' => 'gold',
            'type' => 'gear',
            'weight' => 10
          ]);
  
          DB::table('items')->insert([
            'name' => 'Piton',
            'cost' => 5,
            'currency' => 'copper',
            'type' => 'gear',
            'weight' => 0.25
          ]);
  
          DB::table('items')->insert([
            'name' => 'Poison, basic (vial)',
            'cost' => 10000,
            'currency' => 'gold',
            'type' => 'gear',
            'weight' => 0
          ]);
  
          DB::table('items')->insert([
            'name' => 'Pole (10-foot)',
            'cost' => 5,
            'currency' => 'copper',
            'type' => 'gear',
            'weight' => 7
          ]);
  
          DB::table('items')->insert([
            'name' => 'Pot, iron',
            'cost' => 200,
            'currency' => 'gold',
            'type' => 'gear',
            'weight' => 10
          ]);
  
          DB::table('items')->insert([
            'name' => 'Pouch',
            'cost' => 50,
            'currency' => 'silver',
            'type' => 'gear',
            'weight' => 1
          ]);
  
          DB::table('items')->insert([
            'name' => 'Quiver',
            'cost' => 100,
            'currency' => 'gold',
            'type' => 'gear',
            'weight' => 1
          ]);
  
          DB::table('items')->insert([
            'name' => 'Ram, portable',
            'cost' => 40,
            'currency' => 'silver',
            'type' => 'gear',
            'weight' => 35
          ]);
  
          DB::table('items')->insert([
            'name' => 'Robes',
            'cost' => 100,
            'currency' => 'gold',
            'type' => 'gear',
            'weight' => 4
          ]);
  
          DB::table('items')->insert([
            'name' => 'Rope, hempen (50 feet)',
            'cost' => 100,
            'currency' => 'gold',
            'type' => 'gear',
            'weight' => 5
          ]);
  
          DB::table('items')->insert([
            'name' => 'Rope, silk (50 feet)',
            'cost' => 1000,
            'currency' => 'gold',
            'type' => 'gear',
            'weight' => 5
          ]);
  
          DB::table('items')->insert([
            'name' => 'Sack',
            'cost' => 1,
            'currency' => 'copper',
            'type' => 'gear',
            'weight' => 0.5
          ]);
  
          DB::table('items')->insert([
            'name' => "Scale, merchant's",
            'cost' => 500,
            'currency' => 'gold',
            'type' => 'gear',
            'weight' => 3
          ]);
  
          DB::table('items')->insert([
            'name' => 'Sealing wax',
            'cost' => 50,
            'currency' => 'silver',
            'type' => 'gear',
            'weight' => 0
          ]);
  
          DB::table('items')->insert([
            'name' => 'Shovel',
            'cost' => 200,
            'currency' => 'gold',
            'type' => 'gear',
            'weight' => 5
          ]);
  
          DB::table('items')->insert([
            'name' => 'Signal whistle',
            'cost' => 5,
            'currency' => 'copper',
            'type' => 'gear',
            'weight' => 0
          ]);
  
          DB::table('items')->insert([
            'name' => 'Signet ring',
            'cost' => 500,
            'currency' => 'gold',
            'type' => 'gear',
            'weight' => 0
          ]);
  
          DB::table('items')->insert([
            'name' => 'Soap',
            'cost' => 2,
            'currency' => 'copper',
            'type' => 'gear',
            'weight' => 0
          ]);
  
          DB::table('items')->insert([
            'name' => 'Spellbook',
            'cost' => 5000,
            'currency' => 'gold',
            'type' => 'gear',
            'weight' => 3
          ]);
  
          DB::table('items')->insert([
            'name' => 'Spyglass',
            'cost' => 100000,
            'currency' => 'gold',
            'type' => 'gear',
            'weight' => 1
          ]);
  
          DB::table('items')->insert([
            'name' => 'Tent, two-person',
            'cost' => 200,
            'currency' => 'gold',
            'type' => 'gear',
            'weight' => 20
          ]);
  
          DB::table('items')->insert([
            'name' => 'Tinderbox',
            'cost' => 50,
            'currency' => 'silver',
            'type' => 'gear',
            'weight' => 1
          ]);
  
          DB::table('items')->insert([
            'name' => 'Torch',
            'cost' => 1,
            'currency' => 'copper',
            'type' => 'gear',
            'weight' => 1
          ]);
  
          DB::table('items')->insert([
            'name' => 'Vial',
            'cost' => 100,
            'currency' => 'gold',
            'type' => 'gear',
            'weight' => 0
          ]);
  
          DB::table('items')->insert([
            'name' => 'Waterskin (full)',
            'cost' => 20,
            'currency' => 'silver',
            'type' => 'gear',
            'weight' => 5
          ]);
  
          DB::table('items')->insert([
            'name' => 'Whetstone',
            'cost' => 1,
            'currency' => 'copper',
            'type' => 'gear',
            'weight' => 1
          ]);
    }
}
