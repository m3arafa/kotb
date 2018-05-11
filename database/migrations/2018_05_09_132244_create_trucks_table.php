<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrucksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trucks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employee_id');
            $table->integer('number');
            $table->integer('oil_change_from');
            $table->integer('oil_change_to');
            $table->integer('read_now');
            $table->date('kamashat_change_date');
            $table->date('battery_change_date');
            $table->date('ghatas_air_from_date');
            $table->date('ghatas_air_to_date');
            $table->date('cover_change_date');
            $table->date('air_condition_change_date');
            $table->date('end_deal_paper_date');
            $table->date('end_insurance_date');
            $table->date('end_work_card_date');
            $table->text('notes');
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
        Schema::dropIfExists('trucks');
    }
}
