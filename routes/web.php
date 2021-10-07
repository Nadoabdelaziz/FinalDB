<?php

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

Route::resource('movie','App\Http\Controllers\MoviesController');

//Edit Added
Route::Get('edit/{id}','App\Http\Controllers\MoviesController@edit');

//Update Added
/*Route::post('edit/{id}','App\Http\Controllers\MoviesController@update');*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware'=> ['auth','admin']],function (){

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
    Route::get('/create', function () {
        return view('movie.create');
    });


});
