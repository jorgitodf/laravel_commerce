<?php

Route::get('/', 'StoreController@index');
Route::get('category/{id}', ['as' => 'store.category', 'uses' => 'StoreController@category']);
Route::get('product/{id}', ['as' => 'store.product', 'uses' => 'StoreController@product']);
Route::get('tag/{id}', ['as' => 'store.tag', 'uses' => 'StoreController@tag']);
Route::get('cart', ['as' => 'cart', 'uses' => 'CartController@index']);
Route::get('cart/add/{id}', ['as' => 'cart.add', 'uses' => 'CartController@add']);
Route::get('cart/destroy/{id}', ['as' => 'cart.destroy', 'uses' => 'CartController@destroy']);
Route::put('cart/update/{id}', ['as' => 'cart.update', 'uses' => 'CartController@update']);

Route::get('checkout/end', ['as' => 'checkout.end', 'uses' => 'CheckoutController@end']);

Route::group(['middleware'=>'auth'], function(){
        Route::get('checkout/placeorder', ['as' => 'checkout.place', 'uses' => 'CheckoutController@place']);
        Route::get('account/orders', ['as' => 'account.orders', 'uses' => 'AccountController@orders']);
});

Route::group(['prefix'=>'admin', 'middleware'=>'auth', 'where'=> ['id'=> '[0-9]+']], function()
{
        Route::group(['prefix'=>'categories'], function() {

                Route::get('', ['as'=>'categories', 'uses'=>'AdminCategoriesController@index']);
                Route::get('create', ['as'=>'categories.create', 'uses'=>'AdminCategoriesController@create']);
                Route::post('', ['as'=>'categories.store', 'uses'=>'AdminCategoriesController@store']);
                Route::get('{id}/destroy', ['as'=>'categories.destroy', 'uses'=>'AdminCategoriesController@destroy']);
                Route::get('{id}/edit', ['as'=>'categories.edit', 'uses'=>'AdminCategoriesController@edit']);
                Route::put('{id}/update', ['as'=>'categories.update', 'uses'=>'AdminCategoriesController@update']);
        });

        Route::group(['prefix'=>'products'], function() {

                Route::get('', ['as'=>'products', 'uses'=>'AdminProductsController@index']);
                Route::get('create', ['as'=>'products.create', 'uses'=>'AdminProductsController@create']);
                Route::post('', ['as'=>'products.store', 'uses'=>'AdminProductsController@store']);
                Route::get('{id}/destroy', ['as'=>'products.destroy', 'uses'=>'AdminProductsController@destroy']);
                Route::get('{id}/edit', ['as'=>'products.edit', 'uses'=>'AdminProductsController@edit']);
                Route::put('{id}/update', ['as'=>'products.update', 'uses'=>'AdminProductsController@update']);

                Route::group(['prefix'=>'images'], function() {

                        Route::get('{id}/product',['as'=>'products.images','uses'=>'AdminProductsController@images']);
                        Route::get('create/{id}/product', ['as'=>'products.images.create', 'uses'=>'AdminProductsController@createImage']);
                        Route::post('store/{id}/product', ['as'=>'products.images.store', 'uses'=>'AdminProductsController@storeImage']);
                        Route::get('destroy/{id}/image', ['as'=>'products.images.destroy', 'uses'=>'AdminProductsController@destroyImage']);

                });

        });

});


Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);


