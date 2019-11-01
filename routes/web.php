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

Route::get('/','InicioController@index')->name('inicio');
Route::get('seguridad/login', 'Seguridad\LoginController@index')->name('login');
Route::post('seguridad/login', 'Seguridad\LoginController@login')->name('login_post');
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function () {
  Route::get('','AdminController@index');
  Route::get('permiso', 'PermisoController@index')->name('permiso');
  Route::get('crear_permiso', 'PermisoController@crear')->name('crear_permiso');
  /*RUTAS DEL MENU*/
  Route::get('menu', 'MenuController@index')->name('menu');
  Route::get('crear_menu', 'MenuController@crear')->name('crear_menu');
  Route::post('guardar_menu', 'MenuController@guardar')->name('guardar_menu');
  Route::get('menu/{id}/editar', 'MenuController@editar')->name('editar_menu');
  Route::put('menu/{id}', 'MenuController@actualizar')->name('actualizar_menu');
  Route::get('menu/{id}/eliminar', 'MenuController@eliminar')->name('eliminar_menu');
  Route::post('guardar_orden', 'MenuController@guardarOrden')->name('guardar_orden');
  /*RUTAS ROL*/
  Route::get('rol', 'RolController@index')->name('rol');
  Route::get('rol/crear', 'RolController@crear')->name('crear_rol');
  Route::post('rol', 'RolController@guardar')->name('guardar_rol');
  Route::get('rol/{id}/editar', 'RolController@editar')->name('editar_rol');
  Route::put('rol/{id}', 'RolController@actualizar')->name('actualizar_rol');
  Route::delete('rol/{id}', 'RolController@eliminar')->name('eliminar_rol');
  /*RUTAS MENU_ROL*/
  Route::get('menu-rol', 'MenuRolController@index')->name('menu_rol');
  Route::post('menu-rol', 'MenuRolController@guardar')->name('guardar_menu_rol');
  
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

