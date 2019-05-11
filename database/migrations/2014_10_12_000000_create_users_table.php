<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',100);
            $table->string('email',100)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password',100);
            $table->string('address',80);
            $table->string('phone_number', 50);
            $table->integer('saving_id');
            $table->integer('garbage_bank_id');
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
