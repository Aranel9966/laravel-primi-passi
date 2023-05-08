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
    $links = [
        "Welcome",
        "Goodbye",
    ];
    return view('home', compact('links'));
})->name('home');
// echo route('home', ['name' => 'Welcome', 'link' => 'welcome']);



Route::get('Welcome', function () {
    $user = [
        "Angelo",
        "di re"
    ];
    return view('helloword', compact('user'));
})->name('Welcome');

Route::get('Goodbye', function () {
    $user = [
        "Angelo",
        "di re"
    ];
    return view('goodbyeword', compact('user'));
})->name('Goodbye');
