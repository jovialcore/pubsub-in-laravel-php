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

Route::get('/j', function () {
    return view('welcome');
});

Route::get('/', function () {
    $visits = "This is the number of times that people visited your website: ". zedis::incr('visits');
    return $visits;   
});


 	Route::get('publish', function () {
    // Route logic...

    zedis::publish('topic', json_encode(['hello' => 'message']));

});

