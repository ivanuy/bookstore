<?php

namespace Bookstore\Http\Controllers;

use Bookstore\Stock;
use Bookstore\Detail;
use Bookstore\Invoice;
use Illuminate\Http\Request;
use Bookstore\Http\Requests;
use Session;
use Bookstore\Cart;
use Auth;

class ShopController extends Controller
{
    public function getIndex()
    {
        $stocks = Stock::all();
        //dd($stocks);
        $cover_img = [];

        foreach ($stocks as $stock) {
            $book_title_cover = strtolower($stock->book->book_title);
            $book_cover = explode(' ', $book_title_cover.'.jpg');
            $cover_img[$stock->book->book_title] = implode('_', $book_cover);
        }

        return view('shop.index', compact('stocks', 'cover_img'));
    }

    public function getAddToCart(Request $req, $id)
    {
        $stock = Stock::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $info = ['id' => $id, 'qty' => $req['qty']];
        //$cart->add($stock, $id, $req['qty']);
        $cart->add($stock, $info);

        $req->session()->put('cart', $cart);
        //dd($req->session()->get('cart'));
        return redirect()->route('shop.index');
    }

    public function removeItem($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);

        $cart->removeItem($id);

        Session::put('cart', $cart);

        return view('shop.cart', [
            'books' => $cart->items,
            'totalQty' => $cart->totalQty,
            'totalPrice' => $cart->totalPrice,
            'stocks' => Stock::all()
        ]);
    }

    public function getCart()
    {
        if (!Session::has('cart')) {
            return view('shop.cart');
        }

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        return view('shop.cart', [
            'books' => $cart->items,
            'totalQty' => $cart->totalQty,
            'totalPrice' => $cart->totalPrice,
            'stocks' => Stock::all()
        ]);
    }

    public function getCheckout()
    {
        if (!Auth::check()) {
            return view('user.signin');
        }

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        $invo_no = mt_rand(100000, 999999);

        $invoice = new Invoice();
        $invoice->invo_no = $invo_no;
        $invoice->inv_date = date('Y-m-d');
        $invoice->cust_no = Auth::user()->id;
        $invoice->pay_method = 0;
        $invoice->total_amount = $total;
        $invoice->save();

        $items = $cart->items;
        //dd($items);
        foreach ($items as $item) {
            $detail = new Detail;
            $detail->invo_no = $invo_no;
            $detail->bk_isbn = $item['item']->book->book_isbn;
            $detail->bk_qty = $item['qty'];
            $detail->bk_price = $item['price'];
            $detail->save();

            //update stock
            $stock = Stock::where('stk_isbn', '=', $item['item']->book->book_isbn)->first();
            $stock->stk_qty -= $item['qty'];
            $stock->save();
        }

        Session::forget('cart');

        return redirect('/');
    }

    public function emptyCart()
    {
        Session::forget('cart');
        return redirect()->route('shop.index');
    }

    public function getInvoice()
    {
        $invoices = Invoice::where('cust_no', '=', Auth::user()->id)->get()->all();
        // dd($invoices);
        //$details = Detail::all();
        $details = [];

        foreach ($invoices as $invoice) {
            $detail = Detail::where('invo_no', '=', $invoice->invo_no)->get();
            array_push($details, $detail);
        }

        //dd($details[0][0]);

        $stocks = Stock::all();
        return view('user.profile', compact('invoices', 'details', 'stocks'));
        // return redirect('/invoice', compact('invoices', 'details', 'stocks'));
    }
}
