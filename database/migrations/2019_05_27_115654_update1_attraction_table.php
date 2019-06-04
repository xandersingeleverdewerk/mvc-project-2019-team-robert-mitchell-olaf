<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1AttractionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('attractions', function (Blueprint $table) {
            //
            $table->unsignedInteger('facilitie_id');
            $table->foreign('facilitie_id')
                ->references('id')->on('facilities')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->unsignedInteger('categorie_id')->nullable();
            $table->foreign('categorie_id')
                ->references('id')->on('categories')
                ->onDelete('restrict')
                ->onUpdate('set null');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('attractions', function (Blueprint $table) {
            //
            $table->dropForeign(['facilitie_id']);
            $table->dropForeign(['categorie_id']);
        });
    }
}
