<?php

use App\Http\Controllers\DataController;

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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/tutorial13',[DataController::class,'index']);
Route::post('/tutorial13',[DataController::class,'store']);
Route::get('/tutorial13/create',[DataController::class,'create']);
Route::get('/tutorial13/{id}/edit',[DataController::class,'edit']);
Route::put('/tutorial13/{id}/',[DataController::class,'update']);
Route::get('/tutorial13/{id}/delete',[DataController::class,'destroy']);


// Route::resource('/tutorial13',DataController::class);



