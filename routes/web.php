<?php

use App\Http\Controllers\HelloWorldController;
use App\Http\Controllers\HtmlController;
use App\Http\Controllers\LatihanController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

route::get('helloworld',[HelloWorldController::class, 'index']);
route::get('ambilfile',[HelloWorldController::class, 'ambilFile']);
route::get('getlorem',[HtmlController::class, 'getLorem']);
Route::get('/tabel', [LatihanController::class, 'getTabel']);
Route::get('/form', [LatihanController::class, 'getForm']);