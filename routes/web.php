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

Route::get('/', function () {
    $data = User::all();
    return $data[0]->properties;

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/property-category', "PropertyCategoryController" )->except(['create', 'show' ]);
Route::resource('/status', "StatusController" )->except(['create', 'show' ]);
Route::resource('/properties', "PropertyController");


Route::get('/table', function () {
    return view('backend.data-tables');
});
Route::get('/cate', function () {
    return view('backend.property_type');
});
Route::get('/confirm', function () {
    return view('frontend.property-confirmation');
});
Route::get('/profile', function () {
    return view('backend.profile');
});
Route::get('/change-password', function () {
    return view('backend.change-password');
});
