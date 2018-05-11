<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommissionsTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commissions_transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('commission_id');
            $table->integer('employee_id');
            $table->integer('client_id');
            $table->integer('rent_id');
            $table->integer('amount');
            $table->text('note');
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
        Schema::dropIfExists('commissions_transactions');
    }
}
