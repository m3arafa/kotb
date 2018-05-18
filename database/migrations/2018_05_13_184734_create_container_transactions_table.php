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
            $table->integer('client_id')->nullable();
            $table->integer('contract_id')->nullable();
            $table->integer('container_id');
            $table->integer('bill_number');
            $table->integer('employee_commission')->nullable();
            $table->string('address')->nullable();
            $table->integer('type_of_transaction');
            $table->date('transaction_date');
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
