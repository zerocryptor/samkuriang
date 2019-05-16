<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->bigIncrements('id');
<<<<<<< HEAD
            $table->string('username',25);
            $table->string('password',72);
            $table->string('db_user');
=======
            $table->string('name',50);
            $table->string('email',70)->unique();
            $table->string('password',72);
            $table->string('address',150);
            $table->string('phone_number', 15);
            $table->rememberToken();
>>>>>>> e8093d2317749452d5d1720d12273eb8efb2a890
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
