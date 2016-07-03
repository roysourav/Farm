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

Route::resource( 'doctor' , 'doctorController' );

Route::resource( 'reproduction' , 'reproductionController' );

Route::resource( 'dead-cow' , 'cowDeadController' );

Route::resource( 'sell-cow' , 'cowSellController' );


//Route for cow species

Route::get( 'species' , [ 'uses'=>'speciesController@getlist', 'as'=>'species.index' ]  );

Route::post( 'species' , [ 'uses'=>'speciesController@store' , 'as'=>'species.store' ] );

Route::get( 'species/{id}/edit' , [ 'uses'=>'speciesController@edit' , 'as'=>'species.edit' ] );

Route::put( 'species/{id}' , [ 'uses'=>'speciesController@update' , 'as'=>'species.update' ] );

Route::delete( 'species/{id}' , [ 'uses'=>'speciesController@destroy' , 'as'=>'species.destroy' ] );

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
