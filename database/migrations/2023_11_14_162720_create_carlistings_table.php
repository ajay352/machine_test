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
        Schema::create('carlistings', function (Blueprint $table) {
            $table->id();
            $table->string('carmodel');
            $table->string('color');
            $table->integer('mileage');
            $table->integer('year');
            $table->string('photo')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('carlistings');
    }
};
