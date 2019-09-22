<?php

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
Route::get('index',[
    'as'=>'trang-chu',
    'uses'=>'pageController@getIndex'
]);
route::get('loai-san-pham/{type}',[
    'as'=>'loaisanpham',
    'uses'=>'pageController@getLoaisp'
]);
route::get('chi-tiet-san-pham/{id}',[
    'as'=>'chitietsanpham',
    'uses'=>'pageController@getChitiet'
]);
route::get('lien-he',[
    'as'=>'lienhe',
    'uses'=>'pageController@getLienhe'
]);
route::get('gioi-thieu',[
    'as'=>'gioithieu',
    'uses'=>'pageController@getGioithieu'
]);
