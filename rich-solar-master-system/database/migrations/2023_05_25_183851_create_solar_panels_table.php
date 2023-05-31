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
        Schema::create('solar_panels', function (Blueprint $table) {
            $table->id();
            $table->string('picture');
            $table->string('name');
            $table->string('wattage');
            $table->string('voltage');
            $table->string('current');
            $table->string('size');
            $table->string('price');
            $table->string('category');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solar_panels');
    }
};
