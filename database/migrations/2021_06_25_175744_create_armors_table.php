<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArmorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('armor', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('armor_class');
            $table->boolean('dex_modifier');
            $table->integer('dex_modifier_max')->nullable();
            $table->integer('strenght_needed')->nullable();
            $table->boolean('stealth_disadvantage');
            $table->string('category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('armors');
    }
}
