<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('triplay_id')->nullable();
            $table->string('harga');
            $table->timestamps();
        });



        Schema::table('prices', function(Blueprint $table){
            $table->foreign('triplay_id')
                  ->references('id')
                  ->on('triplays')
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
        Schema::dropIfExists('prices');
    }
}
