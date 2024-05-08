<?php
use App\Http\Controllers\ItemController;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Laravel\Sanctum\PersonalAccessToken;
use App\Http\Controllers\ShoppingCartController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/sanctum/csrf-cookie', function (Request $request) {
    $token = $request->session()->token();
    return response([$token], 200);
});


Route::post('/ext/setItem', [ItemController::class, 'setItem']);
Route::get('/ext/getItems', [ItemController::class, 'getItems']);
Route::get('/ext/getItem/{search}', [ItemController::class, 'getItem']);
Route::get('/ext/getTheItemByName/{name}', [ItemController::class, 'getTheItemByName']);
Route::get('/ext/getCategoryByItem/{search}', [ItemController::class, 'getCategoryByItem']);


// Define routes for ShoppingCartController
Route::post('/ext/add-to-cart', [ShoppingCartController::class, 'addToCart']);
Route::post('/ext/remove-from-cart/{user_id}/{item_id}', [ShoppingCartController::class, 'removeFromCart']);
Route::get('/ext/user-cart/{user_id}', [ShoppingCartController::class, 'getUserCart']);

//UserController
Route::get('/ext/getUsers', [UserController::class, 'getUsers']);
Route::post('/ext/setUser', [UserController::class, 'setUser']);
Route::get('/ext/user/{id}', [UserController::class, 'getUserById']);
Route::post('/ext/loginUser/', [UserController::class, 'loginUser']);
Route::post('ext/users/{userId}/set-id', [UserController::class, 'setUserId']);

Route::get('/ext/logoutUser/', function (Request $request) {
    $sessionId = $request->session()->getId();
    
    $request->session()->flush();
    $request->session()->forget($sessionId);
    
    return response([true], 200);
});
