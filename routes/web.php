<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\routecontroller;
use App\Http\Controllers\logincontroller;

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




Route::post('/',[logincontroller::class,'LoginData']);

Route::post('/register',[logincontroller::class,'RegisterData']);


Route::get('/{route?}',[routecontroller::class,'route']);

Route::post('/newstudent',[usercontroller::class,'getData']);


Route::post('/reply',[usercontroller::class,'contactData']);

Route::post('/notification',[usercontroller::class,'announceData']);

Route::post('/assignment',[usercontroller::class,'assignmentData']);

Route::post('/document',[usercontroller::class,'docData']);