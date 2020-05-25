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

Route::get('/projects', 'GeneralController@projects')
    ->name('projects');
Route::get('/members', 'GeneralController@members')
    ->name('members');
Route::get('/home', 'GeneralController@home')
    ->name('home');