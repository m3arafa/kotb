<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContainerTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('container_transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employee_id');
            $table->integer('client_id');
            $table->integer('contract_id');
            $table->integer('container_id');
            $table->integer('employee_commission')->nullable();
            $table->integer('address')->nullable();
            $table->integer('type_of_transaction');
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
        Schema::dropIfExists('container_transactions');
    }
}
