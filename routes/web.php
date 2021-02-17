<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'ExpenseItemsController@index');

//expenseitems table
Route::get('/expense-items', 'ExpenseItemsController@index');
Route::get('/expense-items/create', 'ExpenseItemsController@create'); // FIRST
Route::get('/expense-items/{expense_item}', 'ExpenseItemsController@show');
Route::post('/expense-items', 'ExpenseItemsController@store'); // SECOND
Route::get('/expense-items/{expense_item}/edit', 'ExpenseItemsController@edit'); //THIRD
Route::put('/expense-items/{expense_item}', 'ExpenseItemsController@update'); // FOURTH
Route::delete('/expense-items/{expense_item}', 'ExpenseItemsController@destroy'); // FIFTH