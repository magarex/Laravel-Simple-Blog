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

Route::get('/','HomepageController@getHome');

Route::get('adminpanel', function () {
    return view('backend.index');
});

Route::get('homepage','HomepageController@getHomepage');
Route::post('homepage','HomepageController@settings');


Route::get('menu','MenusController@index');
Route::get('menu/get_datatable','MenusController@get_datatable');

Route::get('menu-create','MenusController@create');
Route::post('menu-create','MenusController@store');
Route::get('menu/{id}', 'MenusController@edit');
Route::patch('menu/{id}','MenusController@update');
Route::delete('menu/{id}','MenusController@destroy');



Route::get('ads','AdsController@index');
Route::post('ads','AdsController@adsupdate');

Route::get('articles','ArticlesController@index');
Route::get('article-create', 'ArticlesController@create');
Route::post('article-create', 'ArticlesController@store');
Route::get('articles/get_articlesdata','ArticlesController@get_articlesdata');
Route::get('articles/{id}', 'ArticlesController@edit');
Route::patch('articles/{id}','ArticlesController@update');
Route::delete('articles/{id}','ArticlesController@destroy');

Route::get('content', 'ArticlesController@getContent');
Route::get('content/{id}','ArticlesController@getContent');


Route::get('magazine','ArticlesController@getMagazine');
Route::get('technologies', 'ArticlesController@getTechnologies');
Route::get('game','ArticlesController@getGame');
Route::get('lifestyle','ArticlesController@getLifestyle');
Route::get('news','ArticlesController@getNews');
Route::get('spor','ArticlesController@getSpor');

