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

    return view('home');
});
Route::get('welcome', function () {
    $user = [
        "Angelo",
        "di re"
    ];
    return view('helloword', compact('user'));
});
Route::get('goodby', function () {
    $user = [
        "Angelo",
        "di re"
    ];
    return view('goodbyword', compact('user'));
});
