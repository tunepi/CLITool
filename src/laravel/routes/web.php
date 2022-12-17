<?php

use Illuminate\Foundation\Application;
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

//ログイン画面 or dashboard画面
Route::get('/', function () {
    return Inertia::render('Dashboard',[
        'user' => 'user'
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');





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
    Route::post('/git/register', [$gitController, 'create'])->name('gitRegister');
    Route::post('/git/update', [$gitController, 'update'])->name('gitUpdate');
    Route::post('/git/delete', [$gitController, 'delete'])->name('gitDelete');

    /** @var GitOptionController */
    $gitController = GitOptionController::class;
    //GitOption
    Route::get('/git/option/{id}', [$gitController, 'index'])->name('gitOption');
});


require __DIR__.'/auth.php';
