<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ArticleAdminController;
use App\Http\Controllers\UniqueActionController;
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

Auth::routes();

/*** Routes front ***/
Route::get('/', [ArticleController::class, 'index'])->name('articles');
Route::get('/articles/{slug}', [ArticleController::class, 'show'])->name('article');
Route::get('/home', [ArticleController::class, 'index'])->name('articles');

/*** Routes Admin ***/
Route::prefix('admin')->group(function(){
    Route::get('/articles', [ArticleAdminController::class, 'index'])->name('listearticle')->middleware('admin');
    Route::get('/articles/create', [ArticleAdminController::class, 'create'])->name('createarticle')->middleware('admin');
    Route::post('/articles/store', [ArticleAdminController::class, 'store'])->name('storearticle')->middleware('admin');
    Route::get('/articles/{id}/edit', [ArticleAdminController::class, 'edit'])->name('editarticle')->middleware('admin');
    Route::put('/articles/{id}', [ArticleAdminController::class, 'update'])->name('updatearticle')->middleware('admin');
    Route::delete('/articles/{id}', [ArticleAdminController::class, 'destroy'])->name('deletearticle')->middleware('admin');
});

