<?php
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Laravel\Sanctum\PersonalAccessToken;

/**ALL APIs in this file (api.php) need the api prefix, for example:
* http:localhost:8000/api/sanctum/csrf-cookie
* http:localhost:8000/api/ext/setCategory 
*/

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/sanctum/csrf-cookie', function (Request $request) {
    $token = $request->session()->token();
    return response([$token], 200);
});


Route::post('/ext/setCategory', [PageController::class, 'setCategory']);
Route::get('/ext/getCategories', [PageController::class, 'getCategories']);


Route::post('/ext/setItem', [PageController::class, 'setItem']);
Route::get('/ext/getItems', [PageController::class, 'getItems']);

Route::get('/ext/getItem/{search}', [PageController::class, 'getItem']);
Route::get('/ext/getItemsByCategory/{search}', [PageController::class, 'getItemsByCategory']);
Route::get('/ext/getCategoryByItem/{search}', [PageController::class, 'getCategoryByItem']);

//UserController
Route::get('/ext/getUsers', [UserController::class, 'getUsers']);
Route::post('/ext/setUser', [UserController::class, 'setUser']);
Route::get('/ext/user/{id}', [UserController::class, 'getUserById']);
Route::post('/ext/loginUser/', [UserController::class, 'loginUser']);
Route::get('/ext/logoutUser/', function (Request $request) {
    $sessionId = $request->session()->getId();
    
    $request->session()->flush();
    $request->session()->forget($sessionId);
    
    return response([true], 200);
});