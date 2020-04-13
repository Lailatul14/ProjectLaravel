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

Route::get('hi', function () {
    return "Hi, lagi belajar laravel ni yee....";
});


Route::get('myView', function () {
    return view('webtest');
});


Route::get('ID/{id}', function ($id) {
    echo 'ID anda : '.$id;
});


Route::get('viewcontroll', 'MyfirstController@index');

Route::get('tampilnama', 'MyfirstController@nama');

Route::get('matkul', 'MyfirstController@matkul');

Route::get('getname/{nama}', 'MyfirstController@getNameFromUrl');

Route::get('formulir', 'MyfirstController@formulir');
Route::post('formulir/proses', 'MyfirstController@proses');
Route::get('home', 'MyfirstController@home');
Route::get('tentang', 'MyfirstController@tentang');

Route::get('admin', 'MasterController@admin');

Route::get('header', function () {
    return view('admin/header');
});

Route::get('footer', function () {
    return view('admin/footer');
});

Route::get('sidebar', function () {
    return view('admin/sidebar');
});

Route::get('body', function () {
    return view('admin/body');
});


Route::get('Categoryindex', 'Master\CategoriesController@index') ;
Route::get('Categorycreate', 'Master\CategoriesController@create') ;
Route::get('Categoryedit{id}', 'Master\CategoriesController@edit') ;
Route::get('Categorydestroy/{id}', 'Master\CategoriesController@destroy') ;
Route::post('Categoryupdate', 'Master\CategoriesController@update') ;
Route::post('Categorystore', 'Master\CategoriesController@store') ;



Route::get('Customerindex', 'Master\CustomerController@index') ;
Route::get('Customercreate', 'Master\CustomerController@create') ;
Route::get('Customeredit{id}', 'Master\CustomerController@edit') ;
Route::get('Customerdestroy/{id}', 'Master\CustomerController@destroy') ;
Route::post('Customerupdate', 'Master\CustomerController@update') ;
Route::post('Customerstore', 'Master\CustomerController@store') ;

Route::get('Productindex', 'Master\ProductController@index') ;
Route::get('Productcreate', 'Master\ProductController@create') ;
Route::get('Productedit{id}', 'Master\ProductController@edit') ;
Route::get('Productdestroy/{id}', 'Master\ProductController@destroy') ;
Route::post('Productupdate', 'Master\ProductController@update') ;
Route::post('Productstore', 'Master\ProductController@store') ;

Route::get('Userindex', 'Master\UserController@index') ;
Route::get('Usercreate', 'Master\UserController@create') ;
Route::post('Userstore', 'Master\UserController@store') ;

Route::get('Useredit{id}', 'Master\UserController@edit') ;

Route::post('Userupdate', 'Master\UserController@update') ;

Route::get('Userdestroy/{id}', 'Master\UserController@destroy') ;

Route::get('Transaksi/Index4', 'Transaksi\SalesController@index') ;
Route::get('Transaksi/Create4', 'Transaksi\SalesController@create') ;
Route::get('Transaksi/Edit4', 'Transaksi\SalesController@edit') ;
Route::get('Transaksi/Destroy4', 'Transaksi\SalesController@destroy') ;

Route::get('Transaksi/Index5', 'Transaksi\SalesDetailController@index') ;
Route::get('Transaksi/Create5', 'Transaksi\SalesDetailController@create') ;
Route::get('Transaksi/Edit5', 'Transaksi\SalesDetailController@edit') ;
Route::get('Transaksi/Destroy5', 'Transaksi\SalesDetailController@destroy') ;

Route::get('Posindex', 'Transaksi\PosController@index') ;

