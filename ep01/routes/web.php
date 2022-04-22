<?php

use App\Http\Controllers\Form\TestController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/{id}', [TestController::class, 'listUser'])->where('id', '[0-9]+');

Route::get('/users', [TestController::class, 'listAllUsers']);

Route::get('/user/create', [TestController::class, 'create']);

Route::get('/user/store', [TestController::class, 'store']);


#Route::get('/listagem-usuario', [UserController::class, 'listUser']);