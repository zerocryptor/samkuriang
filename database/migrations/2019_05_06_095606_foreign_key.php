<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('garbage_price_list', function (Blueprint $table) {
            /**
             * @foreign table garbages,garbage bank
             */
            $table->unsignedInteger('garbage_id');
            $table->foreign('garbage_id')->references('id')->on('garbages')->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedInteger('garbage_bank_id');
            $table->foreign('garbage_bank_id')->references('id')->on('garbage_banks')->onUpdate('cascade')->onDelete('cascade');

            $table->timestampTz('created_at')->useCurrent();
            $table->timestampTz('updated_at')->nullable();
            $table->softDeletesTz();
            $table->string('created_by');
            $table->string('update_by')->nullable();
            $table->string('deleted_by')->nullable(); 

        });

        Schema::table('garbages', function (Blueprint $table) {
            /**
             * @foreign table recycle
             */
            $table->unsignedInteger('recycle_id');
            $table->foreign('recycle_id')->references('id')->on('recycle')->onUpdate('cascade')->onDelete('cascade');

            $table->timestampTz('created_at')->useCurrent();
            $table->timestampTz('updated_at')->nullable();
            $table->softDeletesTz();
            $table->string('created_by');
            $table->string('update_by')->nullable();
            $table->string('deleted_by')->nullable();
            
        });

        Schema::table('garbage_banks', function (Blueprint $table) {
            /**
             * @foreign table garbage officer
             */
            $table->unsignedInteger('garbage_officer_id');
            $table->foreign('garbage_officer_id')->references('id')->on('garbage_officer')->onUpdate('cascade')->onDelete('cascade');

            $table->timestampTz('created_at')->useCurrent();
            $table->timestampTz('updated_at')->nullable();
            $table->softDeletesTz();
            $table->string('created_by');
            $table->string('update_by')->nullable();
            $table->string('deleted_by')->nullable();
            
        });

        Schema::table('savings', function (Blueprint $table) {
            /**
             * @foreign table garbages,users
             */
            $table->unsignedInteger('garbage_id');
            $table->foreign('garbage_id')->references('id')->on('garbages')->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');

            $table->timestampTz('created_at')->useCurrent();
            $table->timestampTz('updated_at')->nullable();
            $table->softDeletesTz();
            $table->string('created_by');
            $table->string('update_by')->nullable();
            $table->string('deleted_by')->nullable();
            
        });   

         Schema::table('users', function (Blueprint $table) {
            /**
             * @foreign table garbage_banks
             */
            $table->unsignedInteger('garbage_bank_id');
            $table->foreign('garbage_bank_id')->references('id')->on('garbage_banks')->onUpdate('cascade')->onDelete('cascade');

            $table->timestampTz('created_at')->useCurrent();
            $table->timestampTz('updated_at')->nullable();
            $table->softDeletesTz();
            $table->string('created_by');
            $table->string('update_by')->nullable();
            $table->string('deleted_by')->nullable();
            
        });   
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
