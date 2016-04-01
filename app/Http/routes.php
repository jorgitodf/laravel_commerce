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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'admin'], function() {

    Route::pattern('id', '[0-9]+');

    Route::get('categories', ['as'=>'categories', 'uses'=>'AdminCategoriesController@index']);
    Route::get('categories/create', ['as'=>'categories.create', 'uses'=>'AdminCategoriesController@create']);
    Route::post('categories', ['as'=>'categories.store', 'uses'=>'AdminCategoriesController@store']);
    Route::get('categories/{id?}/destroy', ['as'=>'categories.destroy', 'uses'=>'AdminCategoriesController@destroy', function($id = null) {
        if($id)
            return redirect()->route('categories.destroy');
        return "ID não é válido";
    }]);
    Route::get('categories/{id?}/edit', ['as'=>'categories.edit', 'uses'=>'AdminCategoriesController@edit', function($id = null) {
        if($id)
            return redirect()->route('categories.edit');
        return "ID não é válido";
    }]);
    Route::put('categories/{id?}/update', ['as'=>'categories.update', 'uses'=>'AdminCategoriesController@update', function($id = null) {
        if($id)
            return redirect()->route('categories.update');
        return "ID não é válido";
    }]);


    Route::get('products', ['as'=>'products', 'uses'=>'AdminProductsController@index']);
    Route::get('products/create', ['as'=>'products.create', 'uses'=>'AdminProductsController@create']);
    Route::post('products', ['as'=>'products.store', 'uses'=>'AdminProductsController@store']);
    Route::get('products/{id?}/destroy', ['as'=>'products.destroy', 'uses'=>'AdminProductsController@destroy', function($id = null) {
        if($id)
            return redirect()->route('products.destroy');
        return "ID não é válido";
    }]);
    Route::get('products/{id?}/edit', ['as'=>'products.edit', 'uses'=>'AdminProductsController@edit', function($id = null) {
        if($id)
            return redirect()->route('products.edit');
        return "ID não é válido";
    }]);
    Route::put('products/{id?}/update', ['as'=>'products.update', 'uses'=>'AdminProductsController@update', function($id = null) {
        if($id)
            return redirect()->route('products.update');
        return "ID não é válido";
    }]);

});


Route::get('exemplo', 'WelcomeController@exemplo');