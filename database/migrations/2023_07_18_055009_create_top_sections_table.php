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
        Schema::create('top_sections', function (Blueprint $table) {
            $table->id();
            $table->string('top_heading')->nullable();
            $table->string('top_about')->nullable();
            $table->string('top_link')->nullable();
            $table->string('top_video_link')->nullable();
            $table->string('team_desc')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('top_sections');
    }
};
