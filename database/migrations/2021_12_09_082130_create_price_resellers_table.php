<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePriceResellersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('price_resellers', function (Blueprint $table) {
            $table->id();
            $table->string('price');
            $table->string('item');
            $table->unsignedBigInteger('game_reseller_id')->nullable();
            $table->timestamps();
        });

        Schema::table('price_resellers', function(Blueprint $table){
            $table->foreign('game_reseller_id')
                  ->references('id')
                  ->on('game_resellers')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('price_resellers');
    }
}
