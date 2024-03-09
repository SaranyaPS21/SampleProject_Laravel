<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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

Route::post('/customerdata',[AdminController::class,'customerdata']);
Route::get('/customerview',[AdminController::class,'customerview'])->name('api.customerview');
Route::get('/invoiceview',[AdminController::class,'invoiceview'])->name('api.invoiceview');

