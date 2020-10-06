<?php

use App\Mail\ContactMessageCreated;
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

Route::get('/', [
    'as'=> 'root_path',
    'uses' => 'PageController@home'
]);

Route::get('/test-email', function(){
    return new ContactMessageCreated('Audrey', 'vtionang05@gmail.com', 'je vous remercie pour tout');
});

Route::get('/about',  [
    'as'=> 'about_path',
    'uses' => 'PageController@about'
]);

Route::get('/contact',  [
    'as'=> 'contact_path',
    'uses' => 'ContactController@create'
]);


Route::post('/contact',  [
    'as'=> 'contact_path',
    'uses' => 'ContactController@store'
]);


Auth::routes(['verify' => true]);


Route::get('/home', 'HomeController@index')->name('home') ;
Route::get('admin', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin', 'Admin\LoginController@login');
Route::post('admin/form', 'SommetController@storeSommet');

Route::get('admin/home', 'AdminController@index' )->name('admin.home')->middleware('auth.admin');
Route::get('admin/form', 'ZoneController@index' )->name('admin.form')->middleware('auth.admin');
Route::get('admin/profil', 'AdminController@profilForm' )->name('admin.profil')->middleware('auth.admin');

Route::middleware('auth.admin')->group(function(){

//    route::get ('admin/liste-des-zones', 'Admin\PageController@list_zone')->name('admin.zone.list');

    route::get ('admin/liste-des-zones', '\App\Http\Livewire\Admin\Zone\ListZone')->name('admin.zone.list');
    route::get ('admin/creer-zone', '\App\Http\Livewire\Admin\Zone\CreateZone')->name('admin.zone.create');
    route::get ('admin/zone/{id}', '\App\Http\Livewire\Admin\Zone\ShowZone')->name('admin.zone.show');

    route::get ('admin/liste-des-types-de-zones', '\App\Http\Livewire\Admin\Typezone\ListTypezone')->name('admin.typezone.list');
    route::get ('admin/creer-types-de-zones', '\App\Http\Livewire\Admin\Typezone\CreateTypezone')->name('admin.typezone.create');

});
