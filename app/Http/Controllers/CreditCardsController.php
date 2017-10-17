<?php

namespace Bookstore\Http\Controllers;

use Bookstore\CreditCard;
use Bookstore\Http\Requests\CreditCardRequest;
use Illuminate\Http\Request;
use Bookstore\Http\Requests;

class CreditCardsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $credit_cards = CreditCard::all()->sortBy('ccard_name');

        return view('transaction.creditcard.index', compact('credit_cards'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('transaction.creditcard.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreditCardRequest $request)
    {
        CreditCard::create($request->all());

        return redirect('creditcards');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $credit_card = CreditCard::find($id);
        return view('transaction.creditcard.show', compact('credit_card'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $credit_card = CreditCard::find($id);

        return view('transaction.creditcard.edit', compact('credit_card'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreditCardRequest $request, $id)
    {
        $credit_card = CreditCard::find($id);
        $input = $request->all();
        $credit_card->fill($input)->save();

        return redirect('creditcards');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CreditCard::find($id)->delete();

        return redirect('creditcards');
    }
}
