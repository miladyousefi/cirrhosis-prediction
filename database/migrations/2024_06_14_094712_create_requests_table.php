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
            $table->integer('Grade_1_fatty')->default(0);
            $table->integer('Grade_2_fatty')->default(0);
            $table->integer('Grade_3_fatty')->default(0);
            $table->integer('Hepatomegaly')->default(0);
            $table->integer('Splenomegaly')->default(0);
            $table->integer('Cirrhosis_peripheral_symptoms')->default(0);
            $table->decimal('IMT_R', 4, 2)->default(0);
            $table->decimal('IMT_L', 4, 2)->default(0);
            $table->decimal('AST', 5, 2)->default(0);
            $table->decimal('ALT', 5, 2)->default(0);
            $table->decimal('ALP', 5, 2)->default(0);
            $table->decimal('CHOLESTROL', 6, 2)->default(0);
            $table->decimal('TG', 5, 2)->default(0);
            $table->decimal('FBS', 5, 2)->default(0);
            $table->decimal('Hb', 4, 2)->default(0);
            $table->decimal('Hct', 4, 2)->default(0);
            $table->decimal('Plt', 5, 2)->default(0);
            $table->decimal('HDL', 4, 2)->default(0);
            $table->decimal('Urea', 5, 2)->default(0);
            $table->decimal('Cr', 3, 2)->default(0);
            $table->decimal('URIC_ACID', 4, 2)->default(0);
            $table->integer('Diabetes')->default(0);
            $table->integer('Hyperlipidemia')->default(0);
            $table->integer('Hypertension')->default(0);
            $table->integer('Alcoholic')->default(0);
            $table->integer('sex')->default(0);
            $table->integer('age')->default(0);
            $table->decimal('BMI', 4, 2)->default(0);
            $table->integer('Uniforms')->default(0);
            $table->integer('non_uniform')->default(0);
            $table->integer('RUQ_pain')->default(0);
            $table->integer('Vague_discomfort_RUQ')->default(0);
            $table->integer('Smoker')->default(0);
            $table->integer('Methotrexate')->default(0);
            $table->integer('Aspirin')->default(0);
            $table->integer('Glucocorticoids')->default(0);
            $table->integer('Calcium_channel_blockers')->default(0);
            $table->integer('Estrogen')->default(0);
            $table->integer('Tetracycline')->default(0);
            $table->integer('Nucleolysis_analogs')->default(0);
            $table->integer('Chemotherapy_drugs')->default(0);
            $table->integer('Tamoxifen')->default(0);
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