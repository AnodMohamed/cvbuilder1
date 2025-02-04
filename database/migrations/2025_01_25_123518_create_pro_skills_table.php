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
        Schema::create('pro_skills', function (Blueprint $table) {
            $table->id();
            $table->string('skill'); // Skill name
            $table->integer('skill_level')->unsigned()->default(0); // Skill level (e.g., percentage)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pro_skills');
    }
};
