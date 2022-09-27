<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController; //import controller

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

//PUT, POST, GET , DESTROY
//rute
Route::get('hello-laravel/{nama}', function ($nama) {
    return '<h1>Belajar Laravel</h1>' . $nama;
});

//rute baru mengarah ke controllers
Route::get('studentmodule', [StudentController::class, 'hello']);

//Rute baru mengarah ke controller passing ke view
Route::get('studentview', [StudentController::class, 'list']);

//index
Route::get('cobamaster',[StudentController::class,'index']);

// Route::resource('tahun-akademik', \App\Http\Controllers\TahunAkademikController::class)->middleware('auth');
Route::resource('tahun-akademik', \App\Http\Controllers\TahunAkademikController::class);

//untuk auth sistem
Route::group(['middleware'=>['auth']], function(){

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
