<?php

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

Route::get('/', function() {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Menu
Route::namespace('Menu')->middleware('auth')->group(function() {

    Route::resource('inventory', 'InventoryController')->names([
    	'index' => 'inventory',
        'create' => 'create',
        'edit'	=> 'edit'
    ]);

    Route::resource('/expense', 'ExpenseController')->names([
        'index' => 'expense',
        'create' => 'create',
        'edit' => 'edit'
    ]);

	Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
	Route::get('/order', 'OrderController@index')->name('order');
	Route::get('/sales', 'SalesController@index')->name('sales');
	Route::get('/customer', 'CustomerController@index')->name('customer');
	Route::get('/purchase-order', 'PurchaseOrderController@index')->name('purchase-order');
	Route::get('/setting', 'SettingController@index')->name('setting');
	Route::get('/supplier', 'SupplierController@index')->name('supplier');
	Route::get('/return', 'ReturnController@index')->name('return');

});
