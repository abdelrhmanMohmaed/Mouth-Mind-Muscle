<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMacroDistributionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('macro_distributions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->float('min_cho', 8, 2)->default(0);
            $table->float('ideal_cho', 8, 2)->default(0);
            $table->float('max_cho', 8, 2)->default(0);

            $table->float('min_protien', 8, 2)->default(0);
            $table->float('ideal_protien', 8, 2)->default(0);
            $table->float('max_protien', 8, 2)->default(0);

            $table->float('min_fat', 8, 2)->default(0);
            $table->float('ideal_fat', 8, 2)->default(0);
            $table->float('max_fat', 8, 2)->default(0);
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
        Schema::dropIfExists('macro_distributions');
    }
}
