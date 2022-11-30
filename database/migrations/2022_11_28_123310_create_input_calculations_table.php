<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInputCalculationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('input_calculations', function (Blueprint $table) {
            $table->id();
            $table->float('milk_s');
            $table->float('milk_l');
            $table->float('milk_f');
            $table->float('vegetable');
            $table->float('fruit');
            $table->float('starch');
            $table->float('proteins_l');
            $table->float('proteins_m');
            $table->float('proteins_h');
            $table->float('fat');
            $table->float('halfstlmfat_s');
            $table->float('halfstlmfat_a');
            $table->float('stlmfat_p');
            $table->float('stlmfat_f');
            $table->float('beverages');
            $table->float('alcohol');
            $table->float('cho');
            $table->float('miscellaneous');
            $table->float('supplements');
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
        Schema::dropIfExists('input_calculations');
    }
}
