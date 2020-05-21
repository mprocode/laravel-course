<?php

use Illuminate\Http\Request;
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
    })->name('app.index');

    Route::get('/user', function() {
        return view('user');
    })->name('app.user');

    Route::get('/profile', function() {
        return view('profile');
    })->name('app.profile');


});

Route::get('/products', function() {
    echo "<h1>Products</h1>";
    echo "<ol>";
    echo "<li>Notebook</li>";
    echo "<li>Printer</li>";
    echo "<li>Mouse</li>";
    echo "<li>Keyboard</li>";
    echo "</ol>";
})->name('products');

Route::redirect('products1', 'products', 301);

Route::get('products2', function() {
    return redirect('/products'); // by route
});

Route::get('products3', function() {
    return redirect()->route('products'); // by route name
});

Route::post('/http_requests', function(Request $request) {
    return 'Hello POST';
});

Route::delete('/http_requests', function(Request $request) {
    return 'Hello DELETE';
});

Route::put('/http_requests', function(Request $request) {
    return 'Hello PUT';
});

Route::patch('/http_requests', function(Request $request) {
    return 'Hello PATCH';
});

Route::options('/http_requests', function(Request $request) {
    return 'Hello OPTIONS';
});

Route::get('/http_requests', function(Request $request) {
    return 'Hello GET';
});

Route::post('/http_requests/{param}', function(Request $request, $param) {
    return "Hello POST - Param: $param";
});
