<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('civilizations', function (Blueprint $table) {
            $table->unsignedInteger('id');
            $table->string('name');
            $table->unsignedInteger('release_id');
            $table->string('architecture');
            $table->string('continent');
            $table->string('focus');
            $table->string('unique_units')->nullable();
            $table->string('unique_technologies')->nullable();
            $table->string('unique_buildings')->nullable();            
            $table->primary('id');
            $table->foreign('release_id')->references('id')->on('releases');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('civilizations');
    }
};
