<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('language_id');
            $table->unsignedBigInteger('platform_id');
            $table->unsignedBigInteger('application_id');
            $table->string('uId', 225)->unique();
            $table->foreign('language_id')->on('languages')->references('id');
            $table->foreign('platform_id')->on('platforms')->references('id');
            $table->foreign('application_id')->on('applications')->references('id');            
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('devices');
    }
}
