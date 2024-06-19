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
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->integer('patient_id');
            $table->integer('user_id');
            $table->integer('age')->nullable();
            $table->boolean('sex')->nullable();
            $table->decimal('BMI', 5, 2)->nullable();
            $table->boolean('Gradefatty1')->nullable();
            $table->boolean('Gradefatty2')->nullable();
            $table->boolean('Gradefatty3')->nullable();
            $table->boolean('Hepatomegaly')->nullable();
            $table->boolean('Splenomegaly')->nullable();
            $table->boolean('Cirrhosis_peripheral_symptoms')->nullable();
            $table->decimal('IMT_R', 3, 1)->nullable(); // Assuming IMT – R is meant to be IMT_R
            $table->decimal('IMT_L', 3, 1)->nullable(); // Assuming IMT – L is meant to be IMT_L
            $table->integer('AST')->nullable();
            $table->integer('ALT')->nullable();
            $table->integer('ALP')->nullable();
            $table->integer('CHOLESTROL')->nullable();
            $table->integer('TG')->nullable();
            $table->integer('FBS')->nullable();
            $table->decimal('Hb', 4, 1)->nullable();
            $table->decimal('Hct', 4, 1)->nullable();
            $table->integer('plt')->nullable();
            $table->integer('HDL')->nullable();
            $table->decimal('Urea', 4, 1)->nullable();
            $table->decimal('Cr', 4, 1)->nullable();
            $table->decimal('URIC_ACID', 4, 1)->nullable(); // Assuming URIC_ACID is meant to be URIC_ACID
            $table->boolean('Diabetes')->nullable();
            $table->boolean('Hyperlipidemia')->nullable();
            $table->boolean('Hypertension')->nullable();
            $table->boolean('Alcoholic')->nullable();
            $table->integer('result')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requests');
    }
};
