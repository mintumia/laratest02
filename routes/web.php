<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\Mintuapps\TestController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('customer');
});*/

Route::get("/",[CustomerController::class,"read"])->name('read');
Route::get("/customer",[CustomerController::class,"read"])->name('customer');
Route::get('/customer/signup',[CustomerController::class,"signup"])->name("customer.signup");
Route::post('/customer/signup',[CustomerController::class,'create'])->name("customer.create");
Route::get("/login",[CustomerController::class,"login"])->name("login");
Route::get("/login2",[CustomerController::class,"login2"]);
Route::get("/user/{id}",[CustomerController::class,"setSession"]);
Route::get('/logout',[CustomerController::class,'sessionUnset']);
Route::get('/test',[TestController::class,'index']);
//Route::get('/test2',[TestController::class,'test2']);

