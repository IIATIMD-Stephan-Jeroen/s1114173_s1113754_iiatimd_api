<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Armor;
use App\Models\Consumable;
use App\Models\Focus;
use App\Models\Potion;
use App\Models\Tool;
use App\Models\Weapon;
use App\Models\Gear;

class ItemController extends Controller
{
    public function getItems() {
        // return Item::all();
        $items = Item::all();
        $weapons = Weapon::all();
        foreach($items as $item) {
          foreach($weapons as $weapon) {
            if($item->type == $weapon->name) {
              $item->relationInfo = $weapon;
            }
          }
        }
        return $items;
      }
  
      public function getItemById($itemId){
        return Item::where('id','=',$itemId)->first();
  
      }
  
      public function getWeapons() {
        return Weapon::all();
      }
  
      public function getArmor() {
        return Armor::all();
      }
  
      public function getConsumables() {
        return Consumable::all();
      }
  
      public function getFocus() {
        return Focus::all();
      }
  
      public function getPotions() {
        return Potion::all();
      }
  
      public function getTools() {
        return Tool::all();
      }
}
