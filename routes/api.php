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
Route::resource('buyers.transactions', 'App\Http\Controllers\Buyer\BuyerTransactionController', ['only' => ['index']]);
Route::resource('buyers.products', 'App\Http\Controllers\Buyer\BuyerProductController', ['only' => ['index']]);
Route::resource('buyers.sellers', 'App\Http\Controllers\Buyer\BuyerSellerController', ['only' => ['index']]);
Route::resource('buyers.categories', 'App\Http\Controllers\Buyer\BuyerCategoryController', ['only' => ['index']]);

/**
/**
/**
 	Category resources
**/

Route::resource('categories', 'App\Http\Controllers\Category\CategoryController', ['except' => ['create','edit']]);
Route::resource('categories.products', 'App\Http\Controllers\Category\CategoryProductController', ['only' => ['index']]);
Route::resource('categories.sellers', 'App\Http\Controllers\Category\CategorySellerController', ['only' => ['index']]);
Route::resource('categories.transactions', 'App\Http\Controllers\Category\CategoryTransactionController', ['only' => ['index']]);
Route::resource('categories.buyers', 'App\Http\Controllers\Category\CategoryBuyerController', ['only' => ['index']]);

/**
 	Product resources
**/

Route::resource('products', 'App\Http\Controllers\Product\ProductController', ['only' => ['index','show']]);
Route::resource('products.transactions', 'App\Http\Controllers\Product\ProductTransactionController', ['only' => ['index']]);
Route::resource('products.comments', 'App\Http\Controllers\Product\ProductCommentController', ['only' => ['index']]);
Route::resource('products.buyers', 'App\Http\Controllers\Product\ProductBuyerController', ['only' => ['index']]);
Route::resource('products.categories', 'App\Http\Controllers\Product\ProductCategoryController', ['only' => ['index', 'update', 'destroy']]);
Route::resource('products.buyers.transactions', 'App\Http\Controllers\Product\ProductBuyerTransactionController', ['only' => ['store']]);
Route::resource('products.users.comments', 'App\Http\Controllers\Product\ProductUserCommentController', ['only' => ['store']]);

/**
 	Seller resources
**/

Route::resource('sellers', 'App\Http\Controllers\Seller\SellerController', ['only' => ['index','show']]);
Route::resource('sellers.transactions', 'App\Http\Controllers\Seller\SellerTransactionController', ['only' => ['index']]);
Route::resource('sellers.products', 'App\Http\Controllers\Seller\SellerProductController', ['except' => ['edit', 'show' ,'create']]);
Route::resource('sellers.categories', 'App\Http\Controllers\Seller\SellerCategoryController', ['only' => ['index']]);
Route::resource('sellers.buyers', 'App\Http\Controllers\Seller\SellerBuyerController', ['only' => ['index']]);

/**
 	Transaction resources
**/

Route::resource('transactions', 'App\Http\Controllers\Transaction\TransactionController', ['only' => ['index','show']]);
Route::resource('transactions.categories', 'App\Http\Controllers\Transaction\TransactionCategoryController', ['only' => ['index']]);
Route::resource('transactions.sellers', 'App\Http\Controllers\Transaction\TransactionSellerController', ['only' => ['index']]);


/**
 	User resources
**/
Route::resource('users', 'App\Http\Controllers\User\UserController', ['except' => ['create','edit']]);
Route::name('verify')->get('users/verify/{token}', 'App\Http\Controllers\User\UserController@verify');
Route::name('resend')->get('users/{user}/resend', 'App\Http\Controllers\User\UserController@resend');

/**
 	Comment resources
**/
Route::resource('comments', 'App\Http\Controllers\Comment\CommentController', ['only' => ['index','show']]);


/**
 	OAuth resources
**/
Route::post('oauth/token', '\Laravel\Passport\Http\Controllers\AccessTokenController@issueToken');

