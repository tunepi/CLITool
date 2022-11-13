<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\UserController;

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

Route::get('/management', function () {
    return Inertia::render('Management');
})->name('management');

Route::get('/user', [UserController::class, 'index'])->name('user');

Route::post('/user/register', [UserController::class, 'create'])->name('userRegister');
Route::post('/user/update', [UserController::class, 'update'])->name('userUpdate');
Route::post('/user/delete', [UserController::class, 'delete'])->name('userDelete');

require __DIR__.'/auth.php';

//初期画面を一旦コメントアウト
// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });
