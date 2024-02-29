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
        Schema::create('units', function (Blueprint $table) {
            $table->unsignedInteger('id');
            $table->string('name');
            $table->text('description');
            $table->unsignedInteger('release_id');
            $table->string('type');
            $table->unsignedInteger('age');
            $table->string('trained_at');
            $table->string('cost');
            $table->integer('training_time');
            $table->integer('hit_points');
            $table->string('attack')->nullable();
            $table->string('attack_bonuses')->nullable();
            $table->float('rate_of_fire')->nullable();
            $table->integer('melee_armor')->nullable();
            $table->integer('pierce_armor')->nullable();
            $table->string('speed')->nullable();
            $table->integer('line_of_sight')->nullable();
            $table->string('upgrades_to')->nullable();
            $table->string('upgrade_cost')->nullable();
            $table->integer('upgrade_time')->nullable();
            
    
            $table->primary('id');
            $table->foreign('release_id')->references('id')->on('releases');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('units');
    }
};
