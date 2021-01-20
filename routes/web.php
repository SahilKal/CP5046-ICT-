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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware'=>['auth','admin']],function (){
    
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });

    Route::get('/role-register','App\Http\Controllers\Admin\DashboardController@registered');
    Route::get('/role-edit/{id}','App\Http\Controllers\Admin\DashboardController@registeredit');
    Route::put('/role-register-update/{id}','App\Http\Controllers\Admin\DashboardController@registerupdate');
    Route::delete('/role-delete/{id}','App\Http\Controllers\Admin\DashboardController@registerdelete');
    
    Route::get('/abouts','App\Http\Controllers\Admin\AboutusController@index');
    Route::get('/about-us/{id}','App\Http\Controllers\Admin\AboutusController@edit');
    Route::put('/aboutus-update/{id}','App\Http\Controllers\Admin\AboutusController@update');

    Route::get('/service-category','App\Http\Controllers\Admin\ServiceController@index');
    Route::get('/service-create','App\Http\Controllers\Admin\ServiceController@create');

    Route::post("/category-store","App\Http\Controllers\Admin\ServiceController@store");
    Route::get("/service-category-edit/{id}","App\Http\Controllers\Admin\ServiceController@edit");
    Route::put("/category-update/{id}","App\Http\Controllers\Admin\ServiceController@update");
    Route::delete("/service-category-delete/{id}","App\Http\Controllers\Admin\ServiceController@delete");

});

