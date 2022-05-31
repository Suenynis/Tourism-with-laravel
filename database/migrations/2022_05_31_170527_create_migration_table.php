<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMigrationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('migration', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('picture');
            $table->string('Place');
            $table->string('Duration');
            $table->string('Nutrition');
            $table->string('Tourists');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('migration');
    }
}
