<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResellersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resellers', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('saldo');
            $table->string('profile_picture');
            $table->unsignedBigInteger('admin_id')->nullable();
            // $table->unsignedBigInteger('trigger_id')->nullable();
            $table->timestamps();
        });

        Schema::table('resellers', function(Blueprint $table){
            $table->foreign('admin_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });

        // Schema::table('resellers', function(Blueprint $table){
        //     $table->foreign('trigger_id')
        //           ->references('id')
        //           ->on('triggers')
        //           ->onDelete('cascade')
        //           ->onUpdate('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resellers');
    }
}
