<?php

Route::get('/', 'HomeController@index');
Auth::routes();
Route::get('/user/area/{area}', 'User\AreaController@store')->name('user.area.store');

Route::group(['prefix' => '/{area}'], function () {
    
    Route::group(['prefix' => '/Category'], function () {
        Route::get('/', 'Category\CategoryController@index')->name('category.index');;
        
        Route::group(['prefix' => '/{category}'], function () {
           Route::get('/listings', 'Listing\ListingController@index')->name('listings.index');
        });
    });
});
