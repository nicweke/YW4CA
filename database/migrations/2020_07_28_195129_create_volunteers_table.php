<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVolunteersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volunteers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->boolean('is_active')->default(false);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('fname');
            $table->string('lname');
            $table->string('phone_no');
            $table->string('email');
            $table->date('dob');
            $table->string('address');
            $table->string('city');
            $table->string('zip');
            $table->longText('message_body');
            $table->longText('further')->nullable();
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
        Schema::dropIfExists('volunteers');
    }
}
