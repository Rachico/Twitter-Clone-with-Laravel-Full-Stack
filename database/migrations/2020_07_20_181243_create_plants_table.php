<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plants', function (Blueprint $table) {

            $table->id();
            $table->string('utility_name');
            $table->string('Period');
            $table->float('Employees');
            $table->float('Capital');
            $table->float('maintenanceCosts');
            $table->float('Sales');
            $table->float('otherRevenue');
        });
    }

    //factory(\App\Plant::class,30)->create()

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plants');
    }
}
