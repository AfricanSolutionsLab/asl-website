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

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');

Route::get('besoin-un-service', 'CommandeController@index');
Route::post('commandez','CommandeController@store');

Route::get('/', function () {
    return view('accueil');
});

Route::get('blog','ArticleController@index');

Route::get('services', function () {
    return view('services');
});

Route::get('detail', function () {
    return view('detail');
});


Route::get('contactez-nous','ContactController@create');
Route::post('contact','ContactController@save');

Route::post('newsletter','NewsletterController@store');



Route::get('qui-sommes-nous', function () {
    return view('qui-sommes-nous');
});

