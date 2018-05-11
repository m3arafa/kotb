<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('client_id');
            $table->integer('driver_id');
            $table->integer('supervisor_id');
            $table->integer('driver_commission');
            $table->integer('supervisor_commission');
            $table->integer('contract_id')->nullable();
            $table->integer('container_id');
            $table->integer('cost');
            $table->date('from_date');
            $table->date('to_date');
            $table->integer('bill_number');
            $table->date('emptying_date');
            $table->string('address');
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
        Schema::dropIfExists('rents');
    }
}
