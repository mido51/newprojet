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
/*********  Page Index *************/
Route::get('/','TempleteController@index')->name('index');

/*********  Recherche Avec Ajax  2 methode  *************/

        /*********  Recherche Avec Ajax avec get  *************/
Route::get('/ajax_search{name?}','AjaxController@indexSimpleSearch')->name('indexSimpleSearch');
        /*********  Recherche Avec Ajax avec post  *************/
Route::post('/home','AjaxController@indexAdvancedSearch')->name('indexAdvancedSearch');

/*********  Partie admin *************/
Route::prefix('admin')->namespace('Back')->group(function () {

Route::name('getLoginAdmin')->get('/', 'AdminController@getLoginAdmin');
Route::name('postLoginAdmin')->post('/', 'AdminController@postLoginAdmin');
Route::group(['middleware' => ['CheckUser' ,'AccessAdmin']], function () {

Route::name('adminIndex')->get('/index', 'AdminController@adminIndex');

Route::name('adminProperties')->get('/properties', 'AdminController@adminProperties');
Route::get('/propertie/{id?}','AdminController@getDeleteAdmintPropertie')->name('getDeleteAdmintPropertie');
Route::get('/detail_propertie/{id}','AdminController@getDetailstAdminProperties')->name('getDetailstAdminProperties');

Route::name('adminUsers')->get('/users', 'AdminController@adminUsers');
Route::get('/user/{id?}','AdminController@getDeleteAdminUser')->name('getDeleteAdminUser');

Route::name('adminOptions')->get('/options', 'AdminController@adminOptions');

Route::get('/categorie/{id?}','AdminController@adminDeleteCategorie')->name('adminDeleteCategorie');
Route::get('/transaction/{id?}','AdminController@adminDeleteTransaction')->name('adminDeleteTransaction');
Route::get('/location/{id?}','AdminController@adminDeleteLocation')->name('adminDeleteLocation');



});

  });

/************************* Frond end Client*************************/

  Route::get('/inscription_client','UserController@getInscriptionClient')->name('getInscriptionClient');
  Route::post('/inscription_client','UserController@postInscriptionClient')->name('postInscriptionClient');

  Route::get('/login_client','UserController@getLoginClient')->name('getLoginClient');
  Route::post('/login_client','UserController@postLoginClient')->name('postLoginClient');

  Route::group(['middleware' => ['CheckUser' ,'AccessUser']], function () {

  Route::get('/profil_client','UserController@getProfilUser')->name('getProfilUser');
  Route::post('/profil_client','UserController@postModifierProfil')->name('postModifierProfil');

  Route::get('/liste_properties','PropertieController@getListProperties')->name('getListProperties');
  Route::get('/detail_propertie/{id}','PropertieController@getDetailstPropertie')->name('getDetailstProperties');

  Route::get('/properties_client','PropertieController@getPropertiesClient')->name('getPropertiesClient');
  Route::get('/ajout_bien','PropertieController@getAjouterBien')->name('getAjouterBien');
  Route::post('/ajout_bien','PropertieController@postAjouterBien')->name('postAjouterBien');

  Route::get('/properties_client','PropertieController@getPropertiesClient')->name('getPropertiesClient');
  Route::get('/properties_client/{id?}','PropertieController@getDeletetPropertie')->name('getDeletetPropertie');

});



Route::get('/logout_client','UserController@getLogout')->name('getLogout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
