<?php

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
Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/main', function () {
    return view('frontend.index');
})->name('form.main');

Route::any('/error/{error}', 'ErrorController@error')->name('error');
Route::post('/', 'CovidDataController@store')->name('form.store');
Route::get('/', 'CovidDataController@create')->name('form.form');
Route::get('/api', 'CoronaApiController@getNepalData')->name('api');


Route::prefix('admin')->middleware('auth')->name('back.')->group(function () {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

    Route::get('/reports', 'ReportController@index')->name('reports');

    Route::get('/accounts', 'UserController@index')->name('accounts.index');
    Route::get('/accounts/create', 'UserController@create')->name('accounts.create');
    Route::post('/accounts', 'UserController@store')->name('accounts.store');
//    Route::get('/accounts/{accounts}/edit','UserController@edit')->name('accounts.edit');
//    Route::put('/accounts/{accounts}','UserController@update')->name('accounts.update');
    //    Route::delete('/accounts/{accounts}','UserController@destroy')->name('accounts.destroy');

    Route::get('/settings/{settings}/edit','UserController@setting_edit')->name('settings.edit');
    Route::put('/settings/{settings}','UserController@setting_update')->name('settings.update');

    Route::post('/forgot-password','UserController@forgot_password')->name('settings.forgot_password');
});
