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

Auth::routes();

Route::get('logout', 'App\Http\Controllers\CustomAuthController@signOut');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('userpages/{user}', 'App\Http\Controllers\PageController@show');
Route::get('pages/{page}', 'App\Http\Controllers\PageController@showOnePage');

Route::post('{user}/addpage', 'App\Http\Controllers\PageController@store');

Route::get('pages/{page}/delete', 'App\Http\Controllers\PageController@delete');
Route::get('pages/{user}/{page}/deleteall', 'App\Http\Controllers\PageController@deleteall');

Route::post('{page}/addnote', 'App\Http\Controllers\NoteController@NoteStore');
Route::get('notes/{note}/edit', 'App\Http\Controllers\NoteController@Edit');
Route::post('notes/{note}/update', 'App\Http\Controllers\NoteController@Update');
Route::get('notes/{note}/delete', 'App\Http\Controllers\NoteController@delete');