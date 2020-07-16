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
    return view('auth.login');
});


Route::get('admin', 'AdminController@index2')->name('admin');


Auth::routes();


//estudiantes
Route::get('estudiantes', 'EstudiantesController@index')->name('estudiantes.index');
Route::get('estudiantes/crear', 'EstudiantesController@create')->name('estudiantes.create');
Route::get('estudiantes/{estudiante}', 'EstudiantesController@show')->name('estudiantes.show');
Route::post('estudiantes', 'EstudiantesController@store')->name('estudiantes.store');
Route::get('estudiantes/{estudiante}/edit', 'EstudiantesController@edit')->name('estudiantes.edit');
Route::put('estudiantes/{estudiante}', 'EstudiantesController@update')->name('estudiantes.update');
Route::delete('estudiantes/{estudiante}', 'EstudiantesController@destroy')->name('estudiantes.destroy');

//Usuarios

Route::get('usuarios', 'UsersController@index')->name('usuarios.index');
Route::get('usuarios/users', 'UsersController@create')->name('usuarios.create');
Route::get('usuarios/{users}', 'UsersController@show')->name('usuarios.show');
Route::post('usuarios', 'UsersController@store')->name('usuarios.store');
Route::get('usuarios/{users}/edit', 'UsersController@edit')->name('usuarios.edit');
Route::put('usuarios/{users}', 'UsersController@update')->name('usuarios.update');
Route::delete('usuarios/{users}', 'UsersController@destroy')->name('usuarios.destroy');

