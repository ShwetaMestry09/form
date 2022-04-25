<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Membercontroller;
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

Route::get('/', function () {
    return view('index');
});

//Route::post("form",[Membercontroller::class,'fpage']);
Route::view('form','index');
Route::get("db",[Membercontroller::class,'db']);
//Route::view('add','index');

Route::post('form',[MemberController::class,'addData']);
Route::get("list",[Membercontroller::class,'http']);
Route::get("list1",[Membercontroller::class,'list']);