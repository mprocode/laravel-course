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
    return '<h1>welcome</h1>';
});

Route::get('hello/{firstname}/{lastname}', function($firstname, $lastname) {
    return "Hello, $firstname $lastname!";
});

Route::get('name/{firstname}/{lastname?}', function($firstname, $lastname=null) {
    if(isset($lastname))
        return "Hello, $firstname $lastname!";
    return "Hello, $firstname!";
});

