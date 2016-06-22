<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::get('/', array( 'as'=>'home', 'uses'=>'HomeController@index' ) );

Route::resource( 'employee', 'employeeController' );

Route::resource( 'supplier', 'supplierController' );

Route::resource( 'customer', 'customerController' );

Route::resource( 'cow', 'cowController' );

Route::resource( 'cowseller' , 'cowsellerController' );




//Route::auth();

// Authentication Routes...
    Route::get('/login', 'Auth\AuthController@showLoginForm');
    Route::post('/login', 'Auth\AuthController@login');
    Route::get( '/logout', [ 'as'=>'logout', 'uses'=>'Auth\AuthController@logout' ] );

    // Registration Routes...
    Route::get('/register', [ 'as'=>'register', 'middleware' => 'auth','uses'=>'Auth\AuthController@showRegistrationForm']);

    Route::post('/register', [ 'middleware' => 'auth','uses'=>'Auth\AuthController@register']);

    //All User

    Route::get('/users', [ 'as'=>'user.index','middleware' => 'auth', 'uses' =>'userController@index']);

    Route::delete('/user/{user}', [ 'as'=>'user.destroy','middleware' => 'auth', 'uses' =>'userController@destroy']);

    // Password Reset Routes...
    Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
    Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
    Route::post('password/reset', 'Auth\PasswordController@reset');
