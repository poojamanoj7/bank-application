<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;

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

Route::post('deposit', [TransactionController::class, 'deposit']);
Route::post('login', [LoginController::class, 'login']);

Route::post('withdraw', [TransactionController::class, 'withdraw']);
Route::get('showStatement', [TransactionController::class, 'showStatement']);
Route::get('showStatementparticular', [TransactionController::class, 'showStatementparticular']);
 Route::post('sendMoney', [TransactionController::class, 'sendMoney']);

