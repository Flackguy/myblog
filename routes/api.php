<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiControler;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/articles', [ApiControler::class, 'listApi']);
Route::post('/articles', [ApiControler::class, 'createApi']);
Route::put('/articles/{id}', [ApiControler::class, 'updateApi']);
Route::delete('/articles/{id}', [ApiControler::class, 'deleteApi']);