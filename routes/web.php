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

Route::get('/', [
    'as' => '/',
    'uses' => 'HomeController@Home'
]);

Route::get('/chiens/males/', [
    'as' => 'chiens/males',
    'uses' => 'ChienController@getOwnChiens'
]);

Route::get('/chiens/femelles/', [
    'as' => 'chiens/femelles',
    'uses' => 'ChienController@getOwnChiennes'
]);


Route::get('/chiens/exterieur', [
    'as' => 'chiens/ext/',
    'uses' => 'ChienController@getExtChiens'
]);

Route::get('/chiot/{own}', [
    'as' => 'chiot',
    'uses' => 'ChienController@getChiots'
]);
Route::get('futures/portees/', [
    'as' => 'futures/portees',
    'uses' => 'ChienController@getFuturesPortees'
]);

Route::get('anciennes/portees/', [
    'as' => 'anciennes/portees',
    'uses' => 'ChienController@getAnciennesPortees'
]);

Route::get('/details/{id}/{tilte?}', [
    'as' => 'details',
    'uses' => 'ChienController@getDetails'
]);
Route::get('/admin/', [
    'as' => 'admin',
    'uses' => 'AdminController@getAdminCenter'
]);
Route::get('/add/chien', [
    'as' => 'add/chien',
    'uses' => 'AdminController@vueAddChien'
]);

Route::get('/modify/chien', [
    'as' => 'modify/chien',
    'uses' => 'AdminController@getAdminCenter'
]);

Route::get('/about', [
    'as' => 'about',
    'uses' => 'Controller@About'
]);

Route::get('/explaination/{title}', [
    'as' => 'explaination',
    'uses' => 'Controller@Explanation'
]);

Route::get('/albums', [
    'as' => 'albums',
    'uses' => 'AlbumController@getAlbums'
]);

Route::get('/album/details/{id}', [
    'as' => 'album/details',
    'uses' => 'AlbumController@getAlbumDetails'
]);

Route::get('contact', [
    'as' => 'contact',
    'uses' => 'Controller@contact'
]);








Route::post('email', [
    'as' => 'email',
    'uses' => 'HomeController@email'
]);

Route::post('/admin/add/chien', [
    'as' => 'admin/add/chien',
    'uses' => 'ChienController@addChien'
]);
Route::post('/admin/modify/chien', [
    'as' => 'admin/modify/chien',
    'uses' => 'ChienController@addChien'
]);







