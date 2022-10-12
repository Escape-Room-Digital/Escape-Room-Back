<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up()
    {
        Schema::create('logictests', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('statement');
            $table->string('question');
            $table->boolean('correct')->default(true);
            $table->boolean('incorrect')->default(false);
            $table->string('clue');
            $table->string('image');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('logictests');
    }
};
