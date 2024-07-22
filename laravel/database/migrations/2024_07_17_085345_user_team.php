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
        Schema::create('user_team', function (Blueprint $table) {

            $table->unsignedBigInteger('user_info_id');
            $table->unsignedBigInteger('teams_id');



            $table->foreign('user_info_id')->references('id')->on('user_infos')->onDelete('cascade');
            $table->foreign('teams_id')->references('id')->on('teams')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_teams');

    }
};
