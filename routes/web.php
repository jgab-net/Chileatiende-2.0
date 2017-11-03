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

Route::auth();

Route::get('login/claveunica', 'Auth\LoginController@redirectToProvider');
Route::get('login/claveunica/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/', 'HomeController@getIndex');
Route::get('/buscar', 'SearchController@getIndex');
Route::get('/fichas/destacadas', 'PageController@featured');
Route::resource('/fichas', 'PageController');
Route::resource('/instituciones', 'InstitutionController');
Route::get('/que-es-chileatiende', 'AboutController');
Route::get('/terminos-y-condiciones', 'TermsController');
Route::get('/politica-de-privacidad', 'PrivacyPolicyController');
Route::get('/enlaces-transparencia', 'TransparencyController');
Route::get('/ayuda/sucursales', 'FaqController@getOffices');
Route::get('/ayuda/oficinas-moviles', 'FaqController@getMobileOffices');
Route::get('/ayuda/{content?}', 'FaqController');
Route::get('/perfil','ProfileController@edit');
Route::put('/perfil','ProfileController@update');

Route::group(['middleware' => ['auth','backend'], 'prefix'=>'backend', 'namespace'=>'Backend'],function () {
    Route::get('/', 'HomeController@getIndex');
    Route::get('/perfil', 'ProfileController@edit');
    Route::put('/perfil', 'ProfileController@update');
    Route::resource('/instituciones', 'InstitutionController');
    Route::resource('/usuarios', 'UserController');
    Route::resource('/oficinas', 'OfficeController');
    Route::resource('/categorias', 'CategoryController');
    Route::resource('/fichas', 'PageController');
    Route::put('/fichas/{id}/status', 'PageController@updateStatus');
    Route::put('/fichas/{id}/master', 'PageController@updateMaster');
    Route::get('/fichas/{pageId}/versions', 'PageController@versions');
    Route::get('/fichas/{pageId}/versions/{versionId}/publish', 'PageController@publishVersion');

    Route::group(['prefix'=>'api','namespace'=>'API'], function (){
        Route::resource('files', 'FileController');
        Route::resource('institutions', 'InstitutionController');
        Route::resource('ministries', 'MinistryController');
        Route::resource('categories', 'CategoryController');
        Route::resource('locations', 'LocationController');
        Route::resource('pages', 'PageController');
    });
});

