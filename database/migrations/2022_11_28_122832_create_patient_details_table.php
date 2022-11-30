<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_details', function (Blueprint $table) {
            $table->id();
            $table->float('height');
            $table->float('weight');
            $table->float('activity_value');
            $table->float('bmr');
            $table->float('tde');
            $table->string('goal');
            $table->float('start_goal');
            $table->float('ideal_goal');
            $table->float('max_goal');
            // $table->foreignId('activity_id')->constrained();
            $table->foreignId('macro_distribution_id')->constrained();
            $table->foreignId('diet_type_id')->constrained();
            $table->integer('age_range_id')->nullable();
            $table->string('fasting')->nullable();
            $table->string('slug')->unique()->nullable();
            $table->foreignId('patient_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patient_details');
    }
}
