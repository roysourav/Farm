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

Route::resource( 'doctor', 'doctorController' );

Route::resource( 'reproduction', 'reproductionController' );

Route::resource( 'dead-cow', 'cowDeadController' );

Route::resource( 'sell-cow' ,'cowSellController' );

Route::resource( 'vaccine', 'vaccineController' );

Route::resource( 'medicine', 'medicineController' );

Route::resource( 'medicine-category', 'medicineCategoryController' , ['except' => ['create','show'] ] );

Route::resource( 'cow-vaccine', 'cowVaccineController', ['except' => ['edit','update','destroy'] ] );

Route::get( 'vaccine/delete/{cow_id}/{vaccine_id}', 'cowVaccineController@delete' );

Route::resource( 'cow-medicine', 'cowMedicineController', ['except' => ['edit','update','destroy'] ] );

Route::get( 'medicine/delete/{cow_id}/{vaccine_id}', 'cowMedicineController@delete' );


Route::resource( 'consumption', 'consumptionController' );

Route::resource( 'food', 'foodController' );

Route::resource( 'milk', 'milkController', ['except' => ['show'] ] );

Route::get( 'milk-date',  [ 'uses' => 'milkController@getdate', 'as' => 'milk.date.get'] );

Route::post( 'milk-date', [ 'uses'=> 'milkController@storedate', 'as' => 'milk.date.store' ] );

Route::resource( 'distribution', 'distributionController', ['except' => ['show'] ]  );




//Route for cow vaccine
/*
Route::get( 'cow-vaccine', [ 'as' => 'cow-vaccine.index', 'uses' => 'cowVaccineController@index' ] );

Route::get( 'cow-vaccine/create', [ 'as' => 'cow-vaccine.create', 'uses' => 'cowVaccineController@create' ] );

Route::post( 'cow-vaccine', [ 'as' => 'cow-vaccine.store', 'uses' => 'cowVaccineController@store' ] );

Route::get( 'vaccine/delete/{id}/{vaccine_id}', 'cowVaccineController@destroy', [ 'except' => ['create', 'show'] ] );
*/




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


//All Pdf route

    Route::group( ['prefix' => 'pdf', 'middleware' => 'auth' ], function(){

        Route::get('/employee', [ 'as' => 'employee.list.pdf', 'uses' => 'pdfController@employeeList' ] );
        Route::get('/employee/{id}', [ 'as' => 'show.employee.pdf', 'uses' => 'pdfController@employeeShow' ] );

        Route::get('/doctor', [ 'as' => 'doctor.list.pdf', 'uses' => 'pdfController@doctorList' ] );
        Route::get('/doctor/{id}', [ 'as' => 'show.doctor.pdf', 'uses' => 'pdfController@doctorShow' ] );

        Route::get('/customer', [ 'as' => 'customer.list.pdf', 'uses' => 'pdfController@customerList' ] );
        Route::get('/customer/{id}', [ 'as' => 'show.customer.pdf', 'uses' => 'pdfController@customerShow' ] );

        Route::get('/supplier', [ 'as' => 'supplier.list.pdf', 'uses' => 'pdfController@supplierList' ] );
        Route::get('/supplier/{id}', [ 'as' => 'show.supplier.pdf', 'uses' => 'pdfController@supplierShow' ] );


    } );