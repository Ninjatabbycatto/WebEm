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
        Schema::create('workplaces', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('manager');
            $table->unsignedBigInteger('users')->nullable();
            $table->unsignedBigInteger('team')->nullable();
            $table->timestamps();
            
            $table->foreign('manager')->references('id')->on('user_infos');
            $table->foreign('team')->references('id')->on('teams');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('workplaces');
    }
};
