<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGarbagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('garbages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',50);
            $table->string('type',25)->nullable();
            $table->string('sum',25)->nullable();
            $table->string('price',25);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('garbages');
    }
}
