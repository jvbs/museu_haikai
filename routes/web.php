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

Route::get('/', 'IndexController@index')->name('index');
Route::get('/{user}/artista', 'IndexController@index')->name('index');

Auth::routes();

Route::prefix('admin')->group(function(){
    Route::get('/home', 'HomeController@index')->name('admin.home');

    Route::get('/obras', 'ObrasController@show')->name('admin.obras.show');
    Route::get('/obras/{obras}/edit', 'ObrasController@edit')->name('admin.obras.edit');
    Route::get('/obras/novo', 'ObrasController@create')->name('admin.obras.create');
    Route::post('/obras', 'ObrasController@store')->name('admin.obras.store');
    Route::put('/obras/{obras}/edit', 'ObrasController@update')->name('admin.obras.update');
    Route::delete('{obras}', 'ObrasController@destroy')->name('admin.obras.destroy');

    Route::get('/perfil/{user}/edit', 'PerfilController@edit')->name('admin.perfil.edit');
    Route::put('/perfil/{user}/edit', 'PerfilController@update')->name('admin.perfil.update');

});
