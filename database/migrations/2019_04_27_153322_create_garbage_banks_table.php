<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGarbageBanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('garbage_banks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('address');
            $table->string('contact');
            $table->string('garbage_price');
            $table->integer('garbage_officer_id');
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
        Schema::dropIfExists('garbage_banks');
    }
}
