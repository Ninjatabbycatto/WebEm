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
        Schema::create('objectives', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_info_id');
            $table->date('startDate');
            $table->date('endDate');
            $table->string('title');
            $table->longText('description');
            $table->boolean('done');
            $table->timestamps();


            $table->foreign('user_info_id')->references('id')->on('user_infos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('objectives');
    }
};
