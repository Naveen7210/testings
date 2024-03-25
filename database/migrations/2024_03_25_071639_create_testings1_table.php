<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('testings1', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('present');
            $table->integer('absent');
            $table->integer('late');
            $table->string('medical');
            $table->string('substitute');
            $table->integer('rg');
            $table->integer('visitor');
            $table->integer('tyfcb');
            $table->integer('testimonial');
            $table->integer('training');
            $table->integer('points');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testings1');
    }
};
