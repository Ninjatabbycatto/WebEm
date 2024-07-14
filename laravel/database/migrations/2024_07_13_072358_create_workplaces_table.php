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
            $table->unsignedBigInteger('manager_id');
            $table->unsignedBigInteger('team_id');
            $table->unsignedBigInteger('announcement_id');
            $table->timestamps();

            //$table->foreign('manager_id')->references('id')->on('users')->onDelete('cascade');
            //$table->foreign('team_id')->references('id')->on('teams')->onDelete('cascade');
            //$table->foreign('announcement_id')->references('id')->on('announcements')->onDelete('cascade');
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
