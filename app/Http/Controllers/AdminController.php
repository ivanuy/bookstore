<?php

namespace Bookstore\Http\Controllers;

use Illuminate\Http\Request;
use Bookstore\Http\Requests;
use Bookstore\Stock;

class AdminController extends Controller
{
    public function index(Request $req)
    {
        $stocks = Stock::all();
        $response;
        $notify = array();
    //     ||
    //    $stock->stk_r_level != $stock->stk_r_quant
        foreach ($stocks as $stock) {
            if ($stock->stk_r_level > $stock->stk_qty) {
                array_push($notify, $stock);
            }
        }
        //dd($notify);
        if (empty($notify)) {
            return view('page.home', compact('notify'));
        }

        //dd($notify);

        if ($req->isMethod('get')) {
            $response = response()->json(['response' => true]);
        }

        return view('page.home', compact('stocks', 'notify'));
    }
}
