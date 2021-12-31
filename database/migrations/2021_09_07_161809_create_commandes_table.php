<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('platMenu_id');
            $table->unsignedBigInteger('facture_id');
            $table->unsignedBigInteger('jusTypeJus_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedInteger('quantite');
            $table->double('prix');
            $table->foreign('platMenu_id')->references('id')->on('plat_menus');
            $table->foreign('facture_id')->references('id')->on('factures');
            $table->foreign('jusTypeJus_id')->references('id')->on('jus_type_juses');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('commandes');
    }
}
