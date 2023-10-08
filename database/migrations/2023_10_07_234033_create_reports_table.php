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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string('Group')->nullable();
            $table->string('type')->nullable();
            $table->string('Day')->nullable();
            $table->time('from')->nullable();
            $table->time('to')->nullable();
            $table->string('class_size')->nullable();
            $table->string('enrolled')->nullable();
            $table->string('waiting')->nullable();
            $table->string('location')->nullable();
            $table->date('date')->nullable();
            $table->string('subject_name');
            $table->string('subject_code');
            $table->foreignId('subject_id')->references('id')->on('subjects')->onDelete('cascade');
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
