<?php

namespace Bookstore\Http\Controllers;

use Bookstore\CreditCard;
use Illuminate\Http\Request;
use Bookstore\Http\Requests;
use Bookstore\User;
use Auth;
use Session;
use Bookstore\Customer;

class UserController extends Controller
{
    public function getSignup()
    {
        return view('user.signup');
    }

    public function postSignup(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'email|required|unique:users',
            'password'=> 'required|min:4'
        ]);

        $user = new User([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password'))
        ]);

        $user->save();

        Auth::login($user);

        return redirect()->route('user.profile');
    }

    public function getSignin()
    {
        return view('user.signin');
    }

    public function postSignin(Request $request)
    {
        $this->validate($request, [
            'email' => 'email|required',
            'password'=> 'required|min:4'
        ]);

        $req = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];

        if (Auth::attempt($req)) {
            return redirect()->route('user.profile');
        }

        return redirect()->back();
    }

    public function getProfile()
    {
        //return view('user.profile');
        return redirect()->route('user.invoice');
    }

    public function getLogout()
    {
        Session::flush('cart');
        Auth::logout();

        //return redirect()->route('');
        return redirect('/');
    }

    //edit profile
    public function edit($id)
    {
        $customer = Customer::find($id);
        $credit_cards = CreditCard::all();

        return view('user.edit', compact('customer', 'credit_cards'));
    }

    public function update(Request $request, $id)
    {
        $customer = Customer::find($id);
        $input = $request->all();
        $customer->fill($input)->save();

        return redirect('/');
    }
}
