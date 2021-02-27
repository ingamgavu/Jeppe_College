<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagesController;
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


Route::get('/',[pagesController::class,'home']);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
//now to make a route group
Route::group(['middleware'=>['auth']],function(){
     Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
});
//now to make a route only for users
Route::group(['middleware' => ['auth', 'role:user']], function() { 
     Route::get('/dashboard/disclaimer', 'App\Http\Controllers\DashboardController@disclaimer')
    ->name('dashboard.disclaimer');
    Route::get('/dashboard/myprofile', 'App\Http\Controllers\DashboardController@myprofile')
    ->name('dashboard.myprofile');
    Route::get('/dashboard/biography', 'App\Http\Controllers\DashboardController@biography')
    ->name('dashboard.biography');
      Route::get('/dashboard/payment', 'App\Http\Controllers\DashboardController@payment')
    ->name('dashboard.payment');
});
//route for Admin users
Route::group(['middleware' => ['auth', 'role:Admin']], function() { 
    Route::get('/dashboard/postcreate', 'App\Http\Controllers\DashboardController@post')
    ->name('dashboard.post');
});
require __DIR__.'/auth.php';
