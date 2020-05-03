<?php

use App\User;
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



Auth::routes();

Route::get('/', 'PublicController@index')->name('home');
Route::resource('/properties', "Property\PropertyController");
Route::delete('/property-image/{id}', 'Property\PropertyImageController@destroy')->name('property-image');
Route::delete('/features/{id}', 'Property\AdditionalFeatureController@destroy')->name('features');
Route::get('/agents', 'Agent\AgentController@publicIndex')->name('public_agent');
Route::get('/agent/{id}', 'Agent\AgentController@publicShow')->name('public_single_agent');


Route::prefix('/user')->group(function(){
    Route::get('/dashboard', "UserController@index");
    Route::get('/{id}/profile', 'UserController@profile')->name('user_profile');
    Route::post('/{id}', 'UserController@profileStore')->name('user_profile_store');
});

Route::prefix('/agent')->middleware('can:isAgent')->group(function(){
    Route::get('/{id}/profile', 'Agent\AgentController@profile')->name('agent_profile');
    Route::post('/{id}', 'Agent\AgentController@profileStore')->name('agent_profile_store');
    Route::get('/properties', "Property\PropertyController@list")->name('properties_list');

});
Route::prefix('/admin')->middleware('can:isAdmin')->group(function(){
    Route::get('/dashboard', 'AdminController@profile')->name('admin_profile');
    Route::get('/profile', 'AdminController@profile')->name('admin_profile');
    Route::post('/profile/{id}', 'AdminController@profileStore')->name('admin_profile_store');
    Route::resource('/property-category', "Property\PropertyCategoryController" )->except(['create', 'show' ]);
    Route::resource('/status', "Property\StatusController" )->except(['create', 'show' ]);
    Route::get('/properties', "Property\PropertyController@list")->name('properties_list');
});






