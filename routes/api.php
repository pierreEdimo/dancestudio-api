<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassRoomController;
use App\Http\Controllers\PostController;

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

Route::post('/register', [AuthController::class, 'register']); 


Route::resource('classrooms', ClassRoomController::class ); 
Route::get('/classrooms/search/{title}', [ClassRoomController::class, 'search']); 

Route::resource('posts', PostController::class ); 

Route::resource('author', AuthorController::class); 

Route::resource('category', CategoryController::class); 

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
