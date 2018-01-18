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

Route::get('/', [
    'uses' => 'NewShopController@index',
    'as' => '/'
]);

Route::get('/female-category', [
    'uses' => 'NewShopController@categoryProduct',
    'as' => 'women-category'
]);

Route::get('/male-category', [
    'uses' => 'NewShopController@categoryProductTwo',
    'as' => 'men-category'
]);

Route::get('/codes', [
    'uses' => 'NewShopController@shortCodes',
    'as' => 'codes'
]);

Route::get('/mail-us', [
    'uses' => 'NewShopController@mailUs',
    'as' =>'mail-us'
]);

Route::get('/login', [
    'uses' => 'NewShopController@login',
    'as' =>'login'
]);

Route::get('/create-account', [
    'uses' => 'NewShopController@register',
    'as' =>'register'
]);

Route::get('/checkout', [
    'uses' => 'NewShopController@checkout',
    'as' =>'checkout'
]);