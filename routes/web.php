<?php

use Illuminate\Support\Facades\App;
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

Route::get('/{locale}', function ($locale) {

    App::setLocale($locale);

    return view('welcome');
})->name('home');

Route::post('/changemyanmar', function () {
    App::setLocale('my');

    return redirect()->route('home', App::getLocale());
});
Route::post('/changeeng', function () {
    App::setLocale('en');
    return redirect()->route('home', App::getLocale());;
});
