<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('client_id');
            $table->integer('number')->unique();
            $table->string('address');
            $table->integer('trip_days');
            $table->integer('number_of_containers');
            $table->integer('type_of_payment'); // 1 =  مقدم 2 = آجل
            $table->date('from_date');
            $table->date('to_date');
            $table->integer('cost');
            $table->integer('paid')->nullable();
            $table->integer('remainder')->nullable();
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
        Schema::dropIfExists('contracts');
    }
}
