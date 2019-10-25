<?php

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

Route::get('/','InicioController@index');

Route::group(['namespace' => 'Admin'], function () {
  Route::get('permiso', 'PermisoController@index')->name('permiso');
  Route::get('crear_permiso', 'PermisoController@crear')->name('crear_permiso');
  /*RUTAS DEL MENU*/
  Route::get('menu', 'MenuController@index')->name('menu');
  Route::get('crear_menu', 'MenuController@crear')->name('crear_menu');
  Route::post('guardar_menu', 'MenuController@guardar')->name('guardar_menu');
});

Route::name('admin.')->prefix('admin')->group(function () {
  Route::get('services', 'ServiceController@index')->name('services.index');
});

Route::prefix('por')->group(function () {
  Route::get('users', function () {
    return 'dostt';
  })->name('users');
});

Route::get('asco/posts', function () {
  return 'pololas';
})->name('post');

