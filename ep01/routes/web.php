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

//Route::get('/user/{id}', [TestController::class, 'listUser'])->name('user.list')->where('id', '[0-9]+');

//Route::get('/users', [TestController::class, 'listAllUsers'])->name('users.listAll');

//Route::get('/user/create', [TestController::class, 'create'])->name('user.create');

//Route::get('/user/update/{id}', [TestController::class, 'update'])->name('user.update');



//Route::post('/user/store', [TestController::class, 'store'])->name('user.store');


//Route::put('/user/edit/{user}', [TestController::class, 'edit'])->name('user.edit')->where('id', '[0-9]+');


//Route::delete('/user/{id}', [TestController::class, 'destroy'])->name('user.destroy')->where('id', '[0-9]+');

//utilizando apenas essa linha, são criadas todas as rotas para o controller de usuário
Route::resource('user', TestController::class);

#Route::get('/listagem-usuario', [UserController::class, 'listUser']);