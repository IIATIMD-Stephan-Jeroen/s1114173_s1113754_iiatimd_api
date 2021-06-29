<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'items';

    function getWeapons() {
      return $this->hasMany('App\Weapon','type','naam');
    }
}
