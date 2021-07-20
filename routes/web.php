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
Route::get('home',function(){
    return view('home');
});

Route::get('export','ExportController@export')->name('export');
Route::post('import', 'ExportController@import')->name('import');
Route::get('ImportView', 'ExportController@ImportView');

Route::prefix('khoa')->group(function(){
    Route::get('/','KhoaController@index')->name('khoa/index');
    Route::get('create','KhoaController@create')->name('khoa/create');
    Route::post('store','KhoaController@store')->name('khoa/store');
    Route::get('show/{id}','KhoaController@show')->name('khoa/show');
    Route::get('edit/{id}','KhoaController@edit')->name('khoa/edit');
    Route::put('update/{id}','KhoaController@update')->name('khoa/update');
    Route::delete('delete/{id}','KhoaController@destroy')->name('khoa/delete');
});


//Route Bộ Môn
Route::prefix('bomon')->group(function(){
    Route::get('/','BoMonController@index')->name('bomon/index');
    Route::get('create','BoMonController@create')->name('bomon/create');
    Route::post('store','BoMonController@store')->name('bomon/store');
    Route::get('show/{id}','BoMonController@show')->name('bomon/show');
    Route::get('edit/{id}','BoMonController@edit')->name('bomon/edit');
    Route::put('update/{id}','BoMonController@update')->name('bomon/update');
    Route::delete('delete/{id}','BoMonController@destroy')->name('bomon/delete');
});

//Route Học Phần
Route::prefix('hocphan')->group(function(){
    Route::get('/','HocPhanController@index')->name('hocphan/index');
    Route::get('create','HocPhanController@create')->name('hocphan/create');
    Route::post('store','HocPhanController@store')->name('hocphan/store');
    Route::get('show/{id}','HocPhanController@show')->name('hocphan/show');
    Route::get('edit/{id}','HocPhanController@edit')->name('hocphan/edit');
    Route::put('update/{id}','HocPhanController@update')->name('hocphan/update');
    Route::delete('delete/{id}','HocPhanController@destroy')->name('hocphan/delete');
});


//Route Giáo Viên
Route::prefix('giaovien')->group(function(){
    Route::get('/','GiaoVienController@index')->name('giaovien/index');
    Route::get('create','GiaoVienController@create')->name('giaovien/create');
    Route::post('store','GiaoVienController@store')->name('giaovien/store');
    Route::get('show/{id}','GiaoVienController@show')->name('giaovien/show');
    Route::get('edit/{id}','GiaoVienController@edit')->name('giaovien/edit');
    Route::put('update/{id}','GiaoVienController@update')->name('giaovien/update');
    Route::delete('delete/{id}','GiaoVienController@destroy')->name('giaovien/delete');
});
Route::prefix('phongthi')->group(function(){
    Route::get('/','PhongThiController@getPhongThi')->name("phongthi");
    Route::get('chonphong/{idNha}','PhongThiController@PhongThi')->name('phongthi/chonphong');
    Route::get('xepphong/{idPhongThi}','PhongThiController@XepPhong')->name('phongthi/xepphong');
    Route::post('store','PhongThiController@store')->name('phongthi/store');
});
Route::prefix('phancong')->group(function(){
    Route::get('/','PhanCongController@index')->name('phancong');   
});


  