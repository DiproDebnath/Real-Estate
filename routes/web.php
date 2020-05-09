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
Route::get('/search', 'PublicController@search')->name('search');

Route::get('/about', 'PublicController@about')->name('about');
Route::get('/contact', 'PublicController@contact')->name('contact');
Route::get('/loan-calculator', 'PublicController@loanCalculator')->name('calculator');

Route::delete('/property-image/{id}', 'Property\PropertyImageController@destroy')->name('property-image');
Route::delete('/features/{id}', 'Property\AdditionalFeatureController@destroy')->name('features');

Route::get('/agents', 'Agent\AgentController@publicIndex')->name('public_agent');
Route::get('/agents/{id}', 'Agent\AgentController@publicShow')->name('public_single_agent');

Route::resource('/properties', "Property\PropertyController");

Route::post('messages/store', "MessengerController@store")->name('messages.store');
Route::delete('messages/{id}',  'MessengerController@destroy')->name('messages.destroy');

Route::prefix('/user')->middleware('auth')->group(function(){
    Route::get('/dashboard', "User\UserController@index")->name('user_dashboard');
    Route::get('/profile', 'ProfileController@profile')->name('user_profile');
    Route::patch('/profile', 'ProfileController@profileStore')->name('user_profile_store');
    Route::get('/change-password', 'ProfileController@changePassword')->name('user_password');
    Route::post('/change-password', 'ProfileController@PasswordStore')->name('user_password_store');

    Route::get('messages', "MessengerController@index")->name('user_messages');
    Route::get('messages/{id}',   'MessengerController@show')->name('user_messages.show');
    Route::put('messages/{id}',  'MessengerController@update')->name('user_messages.update');


});

Route::prefix('/agent')->middleware('auth')->middleware('can:isAgent')->group(function(){
    Route::get('/dashboard', 'Agent\AgentController@index')->name('agent_dashboard');
    Route::get('/profile', 'ProfileController@profile')->name('agent_profile');
    Route::patch('/profile', 'ProfileController@profileStore')->name('agent_profile_store');
    Route::get('/properties', "Agent\AgentController@propertyList")->name('agent_properties_list');
    Route::get('/change-password', 'ProfileController@changePassword')->name('agent_password');
    Route::post('/change-password', 'ProfileController@PasswordStore')->name('agent_password_store');

    Route::get('messages', "MessengerController@index")->name('agent_messages');
    Route::get('messages/{id}',   'MessengerController@show')->name('agent_messages.show');
    Route::put('messages/{id}',  'MessengerController@update')->name('agent_messages.update');


});


Route::prefix('/admin')->middleware('auth')->middleware('can:isAdmin')->group(function(){
    Route::get('/dashboard', 'Admin\AdminController@index')->name('admin_dashboard');
    Route::get('/agents', 'Admin\AdminController@agents')->name('agents');
    Route::get('/agents/{id}', 'Admin\AdminController@showAgent')->name('show_agent');
    Route::delete('/agents/{id}', 'Admin\AdminController@deleteAgent')->name('delete_agent');
    Route::get('/profile', 'ProfileController@profile')->name('admin_profile');

    Route::patch('/profile', 'ProfileController@profileStore')->name('admin_profile_store');

    Route::get('/change-password', 'ProfileController@changePassword')->name('admin_password');
    Route::post('/change-password', 'ProfileController@PasswordStore')->name('admin_password_store');

    Route::resource('/property-category', "Property\PropertyCategoryController" )->except(['create', 'show' ]);
    Route::resource('/status', "Property\StatusController" )->except(['create', 'show' ]);
    Route::get('/properties', "Admin\AdminController@propertyList")->name('admin_properties_list');

    Route::get('messages', "MessengerController@index")->name('admin_messages');
    Route::get('messages/{id}',   'MessengerController@show')->name('admin_messages.show');
    Route::put('messages/{id}',  'MessengerController@update')->name('admin_messages.update');


});






