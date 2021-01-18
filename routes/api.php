<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/**
 	Buyer resources
**/

Route::resource('buyers', 'App\Http\Controllers\Buyer\BuyerController', ['only' => ['index','show']]);

/**
 	Category resources
**/

Route::resource('categories', 'App\Http\Controllers\Category\CategoryController', ['except' => ['create','edit']]);

/**
 	Product resources
**/

Route::resource('products', 'App\Http\Controllers\Product\ProductController', ['only' => ['index','show']]);

/**
 	Seller resources
**/

Route::resource('sellers', 'App\Http\Controllers\Seller\SellerController', ['only' => ['index','show']]);

/**
 	Transaction resources
**/

Route::resource('transactions', 'App\Http\Controllers\Transaction\TransactionController', ['only' => ['index','show']]);

/**
 	User resources
**/

Route::resource('users', 'App\Http\Controllers\User\UserController', ['except' => ['create','edit']]);
