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
            $table->string('name',50);
            $table->string('latitude',15);
            $table->string('longitude',15);
            $table->string('address',85);
            $table->string('contact',15);
            // $table->decimal('garbage_price',15,2);
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
