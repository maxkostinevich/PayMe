<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->nullable();
            $table->bigInteger('form_id')->nullable();
            $table->string('charge_id')->nullable();
            $table->string('customer_name')->nullable();
            $table->string('customer_email')->nullable();
            $table->integer('amount')->nullable();
            $table->integer('application_fee_amount')->nullable();
            $table->string('currency')->nullable();
            $table->string('receipt_url')->nullable();
            $table->tinyInteger('is_refunded')->unsigned()->nullable()->default(0);
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
        Schema::dropIfExists('payments');
    }
}
