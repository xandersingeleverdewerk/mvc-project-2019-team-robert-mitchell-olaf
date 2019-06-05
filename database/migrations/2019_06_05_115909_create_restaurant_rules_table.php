<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestaurantRulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurantRules', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('restaurant_id')->unique();
            $table->foreign('restaurant_id')
                ->references('id')->on('restaurants')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->unsignedInteger('dish_id')->unique();
            $table->foreign('dish_id')
                ->references('id')->on('dishes')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restaurantRules');
    }
}
