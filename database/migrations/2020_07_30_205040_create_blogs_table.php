<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 100)->unique();
            $table->string('desc', 200);
            $table->longText('content');
            $table->longText('content2');
            $table->longText('content3');
            $table->string('img');
            $table->string('alt_img');
            $table->string('alt_img2');
            $table->string('alt_img3');
            $table->string('alt_img4');
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
        Schema::dropIfExists('blogs');
    }
}
