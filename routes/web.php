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
Route::get('/hello', function () {
    return view('pages.home');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/hsphaply', function () {
    return view('pages.hsphaply');
});
Route::get('/hsnhanluc', function () {
    return view('pages.hsnhanluc');
});
Route::get('/nltaichinh', function () {
    return view('pages.nltaichinh');
});
Route::get('/thietbithicong', function () {
    return view('pages.thietbithicong');
});
Route::get('/nanglucvakinhnghiem', function () {
    return view('pages.nlvakn');
});
Route::get('/tintuc', function () {
    return view('pages.tintuc');
});
