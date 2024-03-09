<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
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
Route::get('/',[LoginController::class,'login']);
Route::post('/logindata', [LoginController::class, 'logindata']);
Route::get('/adminhome',[AdminController::class,'adminhome'])->name('route.adminhome');
Route::get('/customerreg',[AdminController::class,'customerreg'])->name('route.customerreg');
Route::get('/customerupdate/{id}',[AdminController::class,'customerupdate']);
Route::post('/updatedata/{id}',[AdminController::class,'updatedata']);
Route::get('/invoicereg',[AdminController::class,'invoicereg'])->name('route.invoicereg');
Route::get('/invoiceupdate/{id}',[AdminController::class,'invoiceupdate']);
Route::post('/updateinvoicedata/{id}',[AdminController::class,'updateinvoicedata']);




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
