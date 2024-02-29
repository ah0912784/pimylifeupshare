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
        Schema::create('technologies', function (Blueprint $table) {
            $table->unsignedInteger('id');
            $table->string('name');
            $table->unsignedInteger('release_id');
            $table->integer('age');
            $table->string('researched_at');
            $table->string('cost');
            $table->integer('research_time');
            $table->text('effect');

            $table->primary('id');
            $table->foreign('release_id')->references('id')->on('releases');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('technologies');
    }
};
//         "id" : 1,
// 		"name" : "Town Watch",
// 		"release_id" : 1,
// 		"age" : 2,
// 		"researched_at" : "Town Center",
// 		"cost" : "75F",
// 		"research_time" : 25,
// 		"effect" : "Building LOS +4"