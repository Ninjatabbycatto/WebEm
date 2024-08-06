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
            $table->string('role');
            $table->string('desc');
            $table->foreignId('workplace_id')->constrained('workplaces')->onDelete('cascade')->nullable();
            $table->foreignId('department')->nullable();
            $table->timestamps();

            //$table->foreign('user')->references('id')->on('users');

            $table->foreign('workplace_id')->references('id')->on('workplaces');
            $table->foreign('department')->references('id')->on('departments');
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
