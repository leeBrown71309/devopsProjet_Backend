<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJusTypeJusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jus_type_juses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jus_id');
            $table->unsignedBigInteger('typeJus_id');
            $table->unsignedInteger('quantite');
            $table->double('prix');
            $table->foreign('typeJus_id')->references('id')->on('type_juses');
            $table->foreign('jus_id')->references('id')->on('juses');
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
        Schema::dropIfExists('jus_type_juses');
    }
}
