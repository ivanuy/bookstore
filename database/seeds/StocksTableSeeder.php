<?php

use Illuminate\Database\Seeder;
use Bookstore\Stock;

class StocksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stock = new Stock([
            'stk_no' => '1',
            'stk_isbn' => '0321965515',
            'stk_qty' => 5,
            'stk_r_level' => 1,
            'stk_r_quant' => 1,
            'stk_price' => 23
        ]);

        $stock->save();

        $stock = new Stock([
            'stk_no' => '2',
            'stk_isbn' => '1591845637',
            'stk_qty' => 5,
            'stk_r_level' => 1,
            'stk_r_quant' => 1,
            'stk_price' => 51
        ]);

        $stock->save();

        $stock = new Stock([
            'stk_no' => '3',
            'stk_isbn' => '1593274483',
            'stk_qty' => 5,
            'stk_r_level' => 1,
            'stk_r_quant' => 1,
            'stk_price' => 89
        ]);

        $stock->save();

        $stock = new Stock([
            'stk_no' => '4',
            'stk_isbn' => '0521387078',
            'stk_qty' => 5,
            'stk_r_level' => 1,
            'stk_r_quant' => 1,
            'stk_price' => 15
        ]);

        $stock->save();

        $stock = new Stock([
            'stk_no' => '5',
            'stk_isbn' => '1449361323',
            'stk_qty' => 5,
            'stk_r_level' => 1,
            'stk_r_quant' => 1,
            'stk_price' => 99
        ]);

        $stock->save();
    }
}
