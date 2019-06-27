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
            $table->string('name',50);
            $table->string('email',70)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password',72);
            $table->text('address');
            $table->string('lat',20);
            $table->string('lng',20);
            $table->string('place_name', 50);
            $table->string('phone_number',16);
            $table->boolean('status')->default(false);
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
