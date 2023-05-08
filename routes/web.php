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
//for creating password
Route::get('/make-password', function () {
    dd(bcrypt('superadmin12345'));
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
// Route::get('/admin','AdminController@index')->name('admin')->middleware('admin');
// Route::get('/superadmin','SuperadminController@index')->name('superadmin')->middleware('superadmin');
// Route::get('/enduser', 'EnduserController@index')->name('enduser')->middleware('enduser');

Route::get('/home','HomeController@index')->name('home');

Route::resource('permanentstocks', 'PermanentStockController');


            //   Consumable-Items
 Route::middleware(['auth'])->group(function () {
Route::get('/admin/consumable/create','ConsumableItemController@create');
Route::post('consumable_submit','ConsumableItemController@store');
Route::get('/admin/consumable/index','ConsumableItemController@show');
Route::get('delete_conumable/{id}','ConsumableItemController@delete');
Route::get('edit_consumable/{id}','ConsumableItemController@edit');
Route::post('update_consumable/{id}','ConsumableItemController@update');


            // Permanent-Items
Route::get('/admin/permanent/create','PermanentItemController@create');
Route::post('perm_submit','PermanentItemController@store');
Route::get('/admin/permanent/index','PermanentItemController@show');
Route::get('delete_perm/{id}','PermanentItemController@delete');
Route::get('edit_perm/{id}','PermanentItemController@edit');
Route::post('updat_submit/{id}','PermanentItemController@update');


           // Stationary-Items
Route::get('/admin/stationary/create','StationaryItemController@create');
Route::post('stationary_submit','StationaryItemController@store');
Route::get('/admin/stationary/index','StationaryItemController@show');
Route::get('delete_stationary/{id}','StationaryItemController@delete');
Route::get('edit_stationary/{id}','StationaryItemController@edit');
Route::post('update_submit/{id}','StationaryItemController@update');

//statinary stock
Route::get('/admin/stationary_stock','StationaryItemController@all_stationary_stock');


           // Consumable Stock
Route::get('/admin/consumable_stock/create','ConsumableStockController@create');
Route::post('stock_submit','ConsumableStockController@store');
Route::get('/admin/consumable_stock/index','ConsumableStockController@show');
Route::get('delete_stack/{id}','ConsumableStockController@delete');
Route::get('edit_stack/{id}','ConsumableStockController@edit');
Route::post('upd_submit/{id}','ConsumableStockController@update');


           // Permanent Stock
Route::get('/admin/permanent_stock/create','PermanentStockController@create');
Route::post('permanent_submit','PermanentStockController@store');
Route::get('/admin/permanent_stock/index','PermanentStockController@index');
Route::get('delete_permanent/{id}','PermanentStockController@delete');
Route::get('edit_permanent/{id}','PermanentStockController@edit');
Route::post('stock_submit/{id}','PermanentStockController@update');


        // All Department
Route::get('/admin/department/create','DepartmentController@create');
Route::post('depart_submit','DepartmentController@store');
Route::get('/admin/department/index','DepartmentController@show');
Route::get('delete_department/{id}','DepartmentController@delete');
Route::get('edit_department/{id}','DepartmentController@edit');
Route::post('update_depart/{id}','DepartmentController@update');

// All Department
Route::get('/admin/end_user/create','EndUserController@create');
Route::post('enduser_submit','EndUserController@store');
Route::get('/admin/end_user/index','EndUserController@index')->middleware('auth');
Route::get('delete_enduser/{id}','EndUserController@destroy');
Route::get('edit_enduser/{id}','EndUserController@edit');
Route::post('update_user/{id}','EndUserController@update');

//super admin for managing orders
Route::get('/admin/all_order','SuperadminController@getallorder');
Route::post('/super_admin/approve_order','SuperadminController@approveOrder');
Route::post('/super_admin/dis_approve_order','SuperadminController@disapproveOrder');
Route::post('/admin/complete_order','SuperadminController@completeOrder');

//enduser route
Route::get('/user/consumable','UserController@getconsumable');
Route::get('/user/stationary','UserController@getstationary');
Route::get('/user/permanent','UserController@getpermanent');
Route::get('/all_order','UserController@getallorder');
Route::get('/create_order','UserController@createorder');
Route::get('/request_conumable/{id}','UserController@request_consumable');
Route::get('/request_stat/{id}','UserController@request_stat');
Route::get('/request_permament/{id}','UserController@request_permament');
Route::post('post_order','UserController@postOrder');

Route::resource('item','ItemController')->middleware('auth');

 });


