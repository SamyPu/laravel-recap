<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\PostController;
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

Route::get('/', [PostController::class, 'index'])->name('index');

Route::get('/admin', function () {
    return view('back.dashboard');
})->middleware(['auth'])->name('admin');

require __DIR__.'/auth.php';

Route::resource('/back/user', UserController::class);

Route::get('back/banner', [BannerController::class, 'index'])->name('banner.index');
Route::get('back/banner/{id}/edit', [BannerController::class, 'edit'])->name('banner.edit');
Route::post('back/banner/{id}', [BannerController::class, 'update'])->name('banner.update');
