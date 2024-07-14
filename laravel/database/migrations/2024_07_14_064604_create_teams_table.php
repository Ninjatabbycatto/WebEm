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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user');
            $table->string('role');
            $table->string('desc');
            $table->unsignedBigInteger('workplace');
            $table->unsignedBigInteger('department');
            $table->timestamps();

            $table->foreign('user')->references('id')->on('users');
            $table->foreign('workplace')->references('id')->on('workplaces');
            $table->foreign('department')->references('id')->on('department');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
