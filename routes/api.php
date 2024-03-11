<?php

use App\Http\Controllers\Api\OrderApiController;
use App\Http\Controllers\Api\TemaMasterApiController;
use App\Http\Controllers\Api\UserApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('tema', [TemaMasterApiController::class, 'get'])->name('temamasterapi.get');
Route::get('paket', [TemaMasterApiController::class, 'getPaket'])->name('paketmasterapi.get');
Route::post('users/register', [UserApiController::class, 'register'])->name('users.register');
Route::post('users/login', [UserApiController::class, 'login'])->name('users.login');
Route::post('order', [OrderApiController::class, 'order'])->name('order.store');


