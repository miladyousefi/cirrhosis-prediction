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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('national_code')->unique();
            $table->integer('user_id')->nullable();
            $table->integer('age')->nullable();
            $table->string('birth_date')->nullable();
            $table->string('image')->nullable();
            $table->string('phone')->unique();
            $table->string('file_code')->unique();
            $table->enum('sex',['F','M'])->default('M');    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');

    }
};
