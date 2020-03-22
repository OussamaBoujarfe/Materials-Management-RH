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
Route::get('welcome', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('welcome');
});

Route::get('layouts/app', function () {
    return view('layouts/app');
});



Route::get('materiels/{id}/show', 'MaterielController@show');
Route::get('materiels', 'MaterielController@index');
Route::get('materiels/all', 'MaterielController@all');
Route::get('materiels/create', 'MaterielController@create');


Route::post('materiels', 'MaterielController@store');
Route::get('materiels/{id}/edit', 'MaterielController@edit');
Route::put('materiels/{id}', 'MaterielController@update');
Route::delete('materiels/{id}', 'MaterielController@destroy');


Route::get('employes/{id}/show', 'EmployeController@show');
Route::get('employes', 'EmployeController@index');
Route::get('employes/create', 'EmployeController@create');
Route::get('employes/all', 'EmployeController@all');
Route::post('employes', 'EmployeController@store');
Route::get('employes/{id}/edit', 'EmployeController@edit');
Route::put('employes/{id}', 'EmployeController@update');
Route::delete('employes/{id}', 'EmployeController@destroy');

Route::get('stocks/alld', 'StockController@deleted');
Route::get('stocks/{id}/show','StockController@show');
Route::get('stocks', 'StockController@index');
Route::get('stocks/create', 'StockController@create');

Route::post('stocks/{id}/show','StockController@store');
Route::post('stocks', 'StockController@store');
Route::get('stocks/{id}/edit', 'StockController@edit');
Route::put('stocks/{id}', 'StockController@update');
Route::delete('stocks/{id}', 'StockController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('materiels/show','StockController@show');