<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlatMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plat_menus', function (Blueprint $table) {
            $table->id();
            $table->double('quantite');
            $table->unsignedBigInteger('menu_id');
            $table->unsignedBigInteger('plat_id');
            $table->foreign('menu_id')->references('id')->on('menus');
            $table->foreign('plat_id')->references('id')->on('plats');
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
        Schema::dropIfExists('plat_menus');
    }
}
