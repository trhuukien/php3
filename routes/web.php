<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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

Route::get('/', 'HomeController@index')->name('home');
Route::get('hang/{id}', 'HomeController@brand')->name('brand');
Route::get('chi-tiet/{id}', 'HomeController@detail')->name('detail');


Route::get('dang-nhap', 'HomeController@login')->name('login');
Route::post('dang-nhap', 'HomeController@loginPost');
Route::get('dang-xuat', function () {
    Auth::logout();
    return redirect((route('login')));
})->name('logout');

Route::get('fake-password/{mk?}', function ($mk = '123456') {
    return Hash::make($mk);
});

Route::get('quen-mat-khau', 'HomeController@forgot')->name('forgot');
Route::post('quen-mat-khau', 'HomeController@sendMail')->name('forgot');
