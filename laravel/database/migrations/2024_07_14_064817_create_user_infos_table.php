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
        Schema::create('user_infos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_auth');
            $table->boolean('type')->default(0);
            $table->string('firstName')->nullable();
            $table->string('lastName')->nullable();
            $table->integer('age')->nullable(); 
            $table->string('gender')->nullable();
            $table->unsignedBigInteger('teams')->nullable();
            $table->unsignedBigInteger('notes')->nullable();
            $table->timestamps();
            
             
            $table->foreign('user_auth')->references('id')->on('users');
            $table->foreign('notes')->references('id')->on('notes');
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_infos');
    }
};
