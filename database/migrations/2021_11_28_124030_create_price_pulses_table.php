<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricePulsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('price_pulses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pulse_id')->nullable();
            $table->string('price');
            $table->string('item');
            $table->timestamps();
        });

        Schema::table('price_pulses', function(Blueprint $table){
            $table->foreign('pulse_id')
                  ->references('id')
                  ->on('pulses')
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
        Schema::dropIfExists('price_pulses');
    }
}
