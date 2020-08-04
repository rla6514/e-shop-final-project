<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'MainPageController@slider', function () {
    return view('welcome');
})->name('main');

Route::get('/beers', 'BeerController@index')->name('beers.index');
Route::get('/beers/{beer_id}', 'BeerController@show');

Route::get('/checkout', 'DeliveryAddressController@checkout');
Route::post('/delivery', 'DeliveryAddressController@store');

Route::get('/contact', 'ContactController@contact');
Route::post('/contact-form', 'ContactController@store');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/companies', 'CompanyController@index')->name('companies.index');
Route::get('/companies/{company_id}', 'CompanyController@show');

Route::get('/add-to-cart/{id}', 'CartController@addToCart');
Route::get('/cart', 'CartController@index')->name('cart.index');

Route::post('/stripe-payment', 'PaymentController@store')->name('stripe.store');
Route::get('/payments', 'PaymentController@checkout')->name('payments.checkout');
Route::post('/confirm-payment', 'PaymentController@confirm');
Route::post('/charge', 'PaymentController@charge');


Route::post('/', 'SearchController@index')->name('search.index');

Route::patch('update-cart', 'CartController@update');

Route::delete('remove-from-cart', 'CartController@remove');






/* use App\Mail\InvoiceEmail;
use Illuminate\Support\Facades\Mail;
Route::get('/send-email', function() {
    
    $price=10;

    Mail::to('test@cbp.cz')->send(new InvoiceEmail($price));
});

use App\User;
use App\Notifications\InvoicePaid;

Route::get('/send-notification', function() {
    $user = User::first();

    $user->notify(new InvoicePaid());
});

Route::get('/get-pdf', function() {
    $pdf = PDF::loadView('invoice-email');

    return $pdf->download('invoice.pdf');
}); */
