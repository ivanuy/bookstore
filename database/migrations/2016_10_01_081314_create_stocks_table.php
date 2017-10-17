<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->string('stk_no', 10)->primary();
            $table->string('stk_isbn', 50);
            $table->integer('stk_qty');
            $table->integer('stk_r_level');
            $table->integer('stk_r_quant');
            $table->double('stk_price', 10, 2);

            $table->foreign('stk_isbn')->references('book_isbn')->on('books')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('stocks');
    }
}
