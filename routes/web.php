<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
 
// Using PHP callable syntax...
Route::post('/', [ProductController::class, 'index']);
 
// // Using string syntax...
Route::get('/', 'App\Http\Controllers\ProductController@index');
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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::post('/', 'ProductController@create');
// Route::resource('products', 'ProductController');
// Route::post('/', [ProductController::class, 'create']);