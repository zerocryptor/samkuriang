<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGarbageOfficersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('garbage_officers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email',50)->unique();
            $table->string('nama',50);
            $table->string('address',80);
            $table->string('phone_number',12);
            $table->string('password',50);
            $table->integer('saving_id');
            $table->rememberToken();
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
        Schema::dropIfExists('garbage_officers');
    }
}
