<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\HoSoNangLucController;
use App\Http\Controllers\LienHeController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TinTuc_Controller;
use Illuminate\Support\Facades\Route;
use App\Models\LienHe;

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


Route::get('/contact', function () {
    $lienhe = LienHe::find(1);
    return view('pages.contact')->with(compact('lienhe'));
});
Route::get('/about', function () {
    $lienhe = LienHe::find(1);
    return view('pages.about')->with(compact('lienhe'));
});
Route::get('/hsphaply', function () {
    $lienhe = LienHe::find(1);
    return view('pages.hsphaply')->with(compact('lienhe'));
});
Route::get('/hsnhanluc', function () {
    $lienhe = LienHe::find(1);
    return view('pages.hsnhanluc')->with(compact('lienhe'));
});$lienhe = LienHe::find(1);
Route::get('/nltaichinh', function () {
    $lienhe = LienHe::find(1);
    return view('pages.nltaichinh')->with(compact('lienhe'));
});
Route::get('/thietbithicong', function () {
    $lienhe = LienHe::find(1);
    return view('pages.thietbithicong')->with(compact('lienhe'));
});
Route::get('/admin', function () {
    return view('pages.back_end.home');
});
Route::get('/admin/giaodienweb', function () {
    return view('pages.back_end.giaodienweb');
});
Route::get('/admin/themslider', function () {
    return view('pages.back_end.themslider');
});
Route::get('/admin/themtintuc', function () {
    return view('pages.back_end.themtintuc');
});
// Slider
Route::get('/slider/{id}', [SliderController::class, 'single_slider']);
Route::get('/delete_slider/{id}', [SliderController::class, 'delete']);
Route::get('image-preview', [SliderController::class, 'show']);
Route::post('/themslider', [SliderController::class, 'create']);
Route::post('/update_slider', [SliderController::class, 'update']);
Route::get('/admin/hienthislider', [SliderController::class, 'showslider']);
// Tintuc
Route::get('/detail-tintuc/{id}', [TinTuc_Controller::class, 'detail']);
Route::post('/themtintuc', [TinTuc_Controller::class, 'create']);
Route::get('/admin/quanlytintuc', [TinTuc_Controller::class, 'index']);
Route::get('/get_tintuc/{id}', [TinTuc_Controller::class, 'single_tintuc']);
Route::post('/update_tintuc', [TinTuc_Controller::class, 'update']);
Route::get('/admin/hienthitintuc', [TinTuc_Controller::class, 'show']);
Route::get('/delete_tintuc/{id}', [TinTuc_Controller::class, 'delete']);
// Hoso
Route::post('/themhoso', [HoSoNangLucController::class, 'index']);
Route::get('/get_hoso/{id}', [HoSoNangLucController::class, 'single_hoso']);
Route::get('/admin/quanlyhosonangluc', [HoSoNangLucController::class, 'show']);
Route::post('/update_hoso', [HoSoNangLucController::class, 'update']);
Route::get('/delete_hoso/{id}', [HoSoNangLucController::class, 'delete']);
// Home
Route::get('/', [HomeController::class, 'index']);
Route::get('/nanglucvakinhnghiem', [HomeController::class, 'nlvakn']);
Route::get('/tintuc',[HomeController::class, 'tintuc']);
// lienhe
Route::get('/admin/loadlienhe', [LienHeController::class, 'index']);
Route::post('/update_logo', [LienHeController::class, 'update_logo']);
Route::post('/update_lienhe', [LienHeController::class, 'update_lienhe']);
