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
        Schema::create('buildings', function (Blueprint $table) {
            $table->unsignedInteger('id');
            $table->string('name');
            $table->text('description')->nullable;
            $table->unsignedInteger('release_id');
            $table->integer('age');
            $table->integer('population')->nullable();
            $table->string('building_function');
            $table->string('cost');
            $table->integer('construction_time');
            $table->string('size');
            $table->integer('hitpoints');
            $table->integer('garrison')->nullable();
            $table->string('attack')->nullable();
            $table->string('attack_bonus')->nullable();
            $table->decimal('rate_of_fire')->nullable();
            $table->integer('projectile_range')->nullable();
            $table->string('accuracy')->nullable();
            $table->integer('projectile_speed')->nullable();
            $table->integer('line_of_sight')->nullable();

            $table->primary('id');
            $table->foreign('release_id')->references('id')->on('releases');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buildings');
    }
};
