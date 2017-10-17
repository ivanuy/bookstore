<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->string("cust_id", 10);
            $table->string("cust_fname", 80);
            $table->string("cust_lname", 80);
            $table->string("billing_address1", 255);
            $table->string("billing_address2", 255);
            $table->string("billing_address3", 255);
            $table->boolean('credit_card_flag');
            $table->integer('credit_card_type');
            $table->mediumInteger('credit_card_number')->unsigned();

            $table->primary('cust_id');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('customers');
    }
}
