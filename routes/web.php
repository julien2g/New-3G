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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [
    'as' => '/',
    'uses' => 'HomeController@Home'
]);

Route::get('/home', [
    'as' => '/home',
    'uses' => 'HomeController@Home'
]);

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

Route::get('/find/chien', [
    'as' => 'find/chien',
    'uses' => 'AdminController@getChienFilled'
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

Route::get('/about', [
    'as' => 'about',
    'uses' => 'Controller@About'
]);

Route::get('contact', [
    'as' => 'contact',
    'uses' => 'Controller@contact'
]);

Route::post('email', [
    'as' => 'email',
    'uses' => 'HomeController@email'
]);


// ------------------------------------------------ Admin ------------------------------------------------ //


Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin/', [
        'as' => 'admin',
        'uses' => 'AdminController@getAdminCenter'
    ]);


// NEWS ROUTE
    Route::get('/admin/add/news/vue', [
        'as' => 'admin/add/news/vue',
        'uses' => 'AdminController@addNews'
    ]);
    Route::get('/admin/modify/news/vue', [
        'as' => 'admin/modify/news/vue',
        'uses' => 'HomeController@getNews'
    ]);

    Route::get('/admin/modify/news/vue/filled', [
        'as' => 'admin/modify/news/vue/filled',
        'uses' => 'AdminController@getNewsFilled'
    ]);

    Route::post('/admin/add/news', [
        'as' => 'admin/add/news',
        'uses' => 'HomeController@addNews'
    ]);


// CHIEN ROUTE
    Route::get('/add/chien/vue', [
        'as' => 'add/chien/vue',
        'uses' => 'AdminController@addChien'
    ]);

    Route::get('/modify/chien/vue', [
        'as' => 'modify/chien/vue',
        'uses' => 'AdminController@modifyChien'
    ]);

    /*Route::get('/find/chien', [
        'as' => 'find/chien',
        'uses' => 'AdminController@getChienFilled'
    ]);*/
    Route::get('/admin/modify/chiens/vue/filled', [
        'as' => 'admin/modify/chiens/vue/filled',
        'uses' => 'AdminController@getChienFilled'
    ]);



    Route::post('/admin/add/chien', [
        'as' => 'admin/add/chien',
        'uses' => 'ChienController@addChien'
    ]);

    Route::post('/admin/modify/chien', [
        'as' => 'admin/modify/chien',
        'uses' => 'ChienController@addChien'
    ]);


// ALBUM ROUTE
    Route::get('/admin/add/album/vue', [
        'as' => 'admin/add/album/vue',
        'uses' => 'AdminController@addAlbum'
    ]);
    Route::get('/admin/modify/album/vue', [
        'as' => 'admin/modify/album/vue',
        'uses' => 'AlbumController@getAlbum'
    ]);

    Route::get('/admin/modify/albums/vue/filled', [
        'as' => 'admin/modify/albums/vue/filled',
        'uses' => 'AdminController@getAlbumFilled'
    ]);

    Route::post('/admin/add/album', [
        'as' => 'admin/add/album',
        'uses' => 'AlbumController@addAlbum'
    ]);

// PORTEES
    Route::get('/admin/add/portee/vue', [
        'as' => 'admin/add/portee/vue',
        'uses' => 'AdminController@addPortee'
    ]);
    Route::get('/admin/modify/portee/vue', [
        'as' => 'admin/modify/portee/vue',
        'uses' => 'ChienController@getPortees'
    ]);

    Route::get('/admin/modify/portee/vue/filled', [
        'as' => 'admin/modify/portee/vue/filled',
        'uses' => 'AdminController@getPorteeFilled'
    ]);

    Route::post('/admin/add/portee', [
        'as' => 'admin/add/portee',
        'uses' => 'ChienController@addPortee'
    ]);

});


// UPLOAD
Route::post('/upload/image/', [
    'as' => 'upload/image',
    'uses' => 'UploadController@uplaod'
]);

Route::post('/upload/video/', [
    'as' => 'upload/video',
    'uses' => 'UploadController@uploadVideo'
]);

Route::get('/delete/image/{folder}/{id_folder}/{id_image}/{slug}', [
    'as' => 'delete/image',
    'uses' => 'UploadController@delete'
]);




Route::get('/logout', [
    'as' => 'logout',
    'uses' => 'HomeController@logout'
]);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
