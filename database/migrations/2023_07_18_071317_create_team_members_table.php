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
        Schema::create('team_members', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('image')->nullable();
            $table->string('designation')->nullable();
            $table->string('member_desc')->nullable();
            $table->string('twitter_link')->nullable();
            $table->string('fb_link')->nullable();
            $table->string('insta_link')->nullable();
            $table->string('linkedin_link')->nullable();
            $table->string('skype_link')->nullable();
            $table->string('github_link')->nullable();
            $table->boolean('is_active')->default(0)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('team_members');
    }
};
