<?php

use App\Http\Controllers\UserFavoriteController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GitController;
use App\Http\Controllers\GitOptionController;

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

Route::group(['prefix' => 'general', 'middleware' => 'auth', 'verified'], function(){
    /** @var GitController */
    $gitController = GitController::class;
    Route::get('/git', [$gitController, 'general'])->name('gitList');
    Route::post('/git/search', [$gitController, 'general'])->name('searchGeneral');

    /** @var GitOptionController */
    $gitOptionController = GitOptionController::class;
    //GitOption
    Route::get('/git/option/{id}', [$gitOptionController, 'general'])->name('gitOptionList');
    $userFavoriteController = UserFavoriteController::class;
    //ブックマーク
    Route::get('/favorite/{command_type?}', [$userFavoriteController, 'index'])->name('favorite');
    Route::post('/favorite/create/{is_favorite?}', [$userFavoriteController, 'create'])->name('favoriteCreate');
    Route::post('/favorite/register/{is_favorite?}', [$userFavoriteController, 'register'])->name('favoriteRegister');
    Route::post('/favorite/cancel/{is_favorite?}', [$userFavoriteController, 'cancel'])->name('favoriteCancel');
});


//マスタ管理G
Route::prefix('management')->group(function(){
    Route::get('/list', function () {
        return Inertia::render('Management');
    })->name('management');

    /** @var UserController */
    $userController = UserController::class;
    //User
    Route::get('/user', [$userController, 'index'])->name('user');
    Route::post('/user/register', [$userController, 'create'])->name('userRegister');
    Route::post('/user/update', [$userController, 'update'])->name('userUpdate');
    Route::post('/user/delete', [$userController, 'delete'])->name('userDelete');

    /** @var GitController */
    $gitController = GitController::class;
    //Git
    Route::get('/git', [$gitController, 'index'])->name('git');
    Route::post('/git/search', [$gitController, 'general'])->name('searchManagement');
    Route::post('/git/register', [$gitController, 'create'])->name('gitRegister');
    Route::post('/git/update', [$gitController, 'update'])->name('gitUpdate');
    Route::post('/git/delete', [$gitController, 'delete'])->name('gitDelete');

    /** @var GitOptionController */
    $gitOptionController = GitOptionController::class;
    //GitOption
    Route::get('/git/option/{id}', [$gitOptionController, 'index'])->name('gitOption');
    Route::post('/git/option/register', [$gitOptionController, 'create'])->name('gitOptionRegister');
    Route::post('/git/option/update', [$gitOptionController, 'update'])->name('gitOptionUpdate');
    Route::post('/git/option/delete', [$gitOptionController, 'delete'])->name('gitOptionDelete');
});


require __DIR__.'/auth.php';
