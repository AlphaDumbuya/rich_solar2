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
        Schema::create('solar_inverters', function (Blueprint $table) {
            $table->id();
            $table->string('picture');
            $table->string('name');
            $table->string('type');
            $table->string('solar_panel');
            $table->string('comment');
            $table->string('output_voltage');
            $table->string('output_current');
            $table->string('battery_wire');
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
        Schema::dropIfExists('solar_inverters');
    }
};
