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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user');
            $table->unsignedBigInteger('workplace');
            $table->unsignedBigInteger('department');
            $table->date('startDate');
            $table->date('endDate');
            $table->string('title');
            $table->longText('description');
            $table->timestamps();


            $table->foreign('user')->references('id')->on('users');
            $table->foreign('workplace')->references('id')->on('workplaces');
            $table->foreign('department')->references('id')->on('depaertments');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
