<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// get sur tous les products
Route::get('products', [ProductController::class, 'getProduct']);
// get sur un des products par id
Route::get('product/{id}', [ProductController::class, 'getProductById']);
// add un products
Route::post('addProduct', [ProductController::class, 'addProduct']);
// update un product
Route::put('updateProduct/{id}', [ProductController::class, 'updateProduct']);
// delete un product
Route::delete('deleteProduct/{id}', [ProductController::class, 'deleteProduct']);
