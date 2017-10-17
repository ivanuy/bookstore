<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
    'uses' => 'ShopController@getIndex',
    'as' => 'shop.index'
]);


// Route::get('/admin', function () {
//     return view('page.home');
// });

Route::get('/admin', [
    'uses' => 'AdminController@index',
    'as' => 'admin'
]);

Route::get('/add-to-cart/{id}', [
    'uses' => 'ShopController@getAddToCart',
    'as' => 'shop.addToCart'
]);

Route::get('/cart', [
    'uses' => 'ShopController@getCart',
    'as' => 'shop.cart'
]);

Route::get('/checkout', [
    'uses' => 'ShopController@getCheckout',
    'as' => 'checkout'
]);

Route::get('/cart/empty', [
    'uses' => 'ShopController@emptyCart',
    'as' => 'shop.emptyCart'
]);

Route::get('/cart/removeItem/{id}', [
    'uses' => 'ShopController@removeItem',
    'as' => 'shop.removeItem'
]);

Route::get('/user/profile/invoice', [
    'uses' => 'ShopController@getInvoice',
    'as' => 'user.invoice'
]);

Route::resource('authors', 'AuthorsController');
Route::resource('genres', 'GenresController');
Route::resource('publishers', 'PublishersController');
Route::resource('books', 'BooksController');
Route::resource('customers', 'CustomersController');
Route::resource('creditcards', 'CreditCardsController');
Route::resource('stocks', 'StockController');

Route::group(['prefix' => 'user'], function () {

    Route::group(['middleware' => 'guest'], function () {
        Route::get('/signup', [
            'uses' => 'UserController@getSignup',
            'as' => 'user.signup'
        ]);

        Route::post('/signup', [
            'uses' => 'UserController@postSignup',
            'as' => 'user.signup'
        ]);

        Route::get('/signin', [
            'uses' => 'UserController@getSignin',
            'as' => 'user.signin'
        ]);

        Route::post('/signin', [
            'uses' => 'UserController@postSignin',
            'as' => 'user.signin'
        ]);
    });

    Route::group(['middleware' => 'auth'], function () {
        Route::get('/profile', [
            'uses' => 'UserController@getProfile',
            'as' => 'user.profile'
        ]);

        // Route::get('/profile/edit', [
        //     'uses' => 'UserController@editProfile',
        //     'as' => 'user.editProfile'
        // ]);
        Route::resource('editProfile', 'UserContro');

        Route::get('/logout', [
            'uses' => 'UserController@getLogout',
            'as' => 'user.logout'
        ]);
    });

});
