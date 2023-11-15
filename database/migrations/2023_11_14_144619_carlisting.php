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
        Schema::create('carlisting', function (Blueprint $table) {
            $table->id();
            $table->string('carmodel');
            $table->string('color');
            $table->integer('mileage');
           
            $table->integer('year');
            
            $table->string('photo')->nullable();
            
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carlisting');
    }
};
