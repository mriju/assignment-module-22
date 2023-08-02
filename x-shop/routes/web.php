<?php
use App\Http\Controllers\Controllers;
use Illuminate\Support\Facades\Route;


Route::get('/customers', 'CustomerController@index');
Route::get('/customers/create', 'CustomerController@create');
Route::post('/customers', 'CustomerController@store');
Route::get('/customers/{id}', 'CustomerController@show');
Route::get('/customers/{id}/edit', 'CustomerController@edit');
Route::put('/customers/{id}', 'CustomerController@update');
Route::delete('/customers/{id}', 'CustomerController@destroy');
