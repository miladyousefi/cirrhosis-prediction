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
            $table->integer('Grade_1_fatty')->nullable();
            $table->integer('Grade_2_fatty')->nullable();
            $table->integer('Grade_3_fatty')->nullable();
            $table->integer('Hepatomegaly')->nullable();
            $table->integer('Splenomegaly')->nullable();
            $table->integer('Cirrhosis_peripheral_symptoms')->nullable();
            $table->decimal('IMT_R', 8, 4)->nullable();
            $table->decimal('IMT_L', 8, 4)->nullable();
            $table->decimal('AST', 8, 4)->nullable();
            $table->decimal('ALT', 8, 4)->nullable();
            $table->decimal('ALP', 8, 4)->nullable();
            $table->decimal('CHOLESTROL', 8, 4)->nullable();
            $table->decimal('TG', 8, 4)->nullable();
            $table->decimal('FBS', 8, 4)->nullable();
            $table->decimal('Hb', 8, 4)->nullable();
            $table->decimal('Hct', 8, 4)->nullable();
            $table->string('Plt')->nullable();
            $table->decimal('HDL', 8, 4)->nullable();
            $table->decimal('Urea', 8, 4)->nullable();
            $table->decimal('Cr', 8, 4)->nullable();
            $table->decimal('URIC_ACID', 8, 4)->nullable();
            $table->integer('Diabetes')->nullable();
            $table->integer('Hyperlipidemia')->nullable();
            $table->integer('Hypertension')->nullable();
            $table->integer('Alcoholic')->nullable();
            $table->integer('sex')->default(0);
            $table->integer('age')->nullable();
            $table->decimal('BMI', 8, 4)->nullable();
            $table->integer('Uniforms')->nullable();
            $table->integer('non_uniform')->nullable();
            $table->integer('RUQ_pain')->nullable();
            $table->integer('Vague_discomfort_RUQ')->nullable();
            $table->integer('Smoker')->nullable();
            $table->integer('Methotrexate')->nullable();
            $table->integer('Aspirin')->nullable();
            $table->integer('Glucocorticoids')->nullable();
            $table->integer('Calcium_channel_blockers')->nullable();
            $table->integer('Estrogen')->nullable();
            $table->integer('Tetracycline')->nullable();
            $table->integer('Nucleolysis_analogs')->nullable();
            $table->integer('Chemotherapy_drugs')->nullable();
            $table->integer('Tamoxifen')->nullable();
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
