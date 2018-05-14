<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientPaymentTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_payment_transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('client_id');
            $table->integer('employee_id')->nullable();
            $table->integer('contract_id');
            $table->integer('value');
            $table->integer('type_of_payment'); // 1=كاش 2=شيك
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
        Schema::dropIfExists('client_payment_transactions');
    }
}
