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
        Schema::create('solar_freezers', function (Blueprint $table) {
            $table->id();
            $table->string('picture');
            $table->string('litres');
            $table->string('comment');
            $table->string('size');
            $table->string('power');
            $table->string('12_hours_work');
            $table->string('24_hours_work');
            $table->string('materials');
            $table->string('solar_panel');
            $table->string('battery');
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
        Schema::dropIfExists('solar_freezers');
    }
};
