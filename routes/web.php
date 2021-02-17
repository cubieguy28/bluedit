<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'ExpenseItemsController@index');

//expenseitems table
Route::get('/bluedit-posts', 'ExpenseItemsController@index');
Route::get('/bluedit-posts/create', 'ExpenseItemsController@create'); // FIRST
Route::get('/bluedit-posts/{expense_item}', 'ExpenseItemsController@show');
Route::post('/bluedit-posts', 'ExpenseItemsController@store'); // SECOND
Route::get('/bluedit-posts/{expense_item}/edit', 'ExpenseItemsController@edit'); //THIRD
Route::put('/bluedit-posts/{expense_item}', 'ExpenseItemsController@update'); // FOURTH
Route::delete('/bluedit-posts/{expense_item}', 'ExpenseItemsController@destroy'); // FIFTH