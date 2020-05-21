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

Route::get('/rules/{name}/{n}', function($name, $n) {
    for($i=0; $i<$n; $i++) {
        echo "Hi! Welcome $name! <br>";
    }
})->where('name', '[A-Za-z]+')->where('n', '[0-9]+');

Route::prefix('/app')->group(function() {


    Route::get('/', function() {
        return view('app');
    });

    Route::get('/user', function() {
        return view('user');
    });

    Route::get('/profile', function() {
        return view('profile');
    });


});



