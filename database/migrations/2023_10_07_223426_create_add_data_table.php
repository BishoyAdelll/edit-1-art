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
        Schema::create('add_data', function (Blueprint $table) {
            $table->id();
            $table->string('name_arabic')->nullable();
            $table->string('name_english')->nullable();
            $table->string('program_name')->nullable();
            $table->string('last_term_GPA')->nullable();
            $table->string('total_credits')->nullable();
            $table->string('GPA')->nullable();
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('add_data');
    }
};
