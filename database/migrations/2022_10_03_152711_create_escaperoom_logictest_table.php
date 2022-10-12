<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up()
    {
        Schema::create('escaperoom_logictest', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('logictest_id');
            $table->foreign('logictest_id')->references('id')->on('logictests');
            $table->unsignedBigInteger('escaperoom_id');
            $table->foreign('escaperoom_id')->references('id')->on('escaperooms');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('escaperoom_logictest');
    }
};
