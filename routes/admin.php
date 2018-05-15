<?php
/**
 * Created by PhpStorm.
 * User: haili
 * Date: 2018/5/15
 * Time: 18:15
 */
Route::group(['prefix'=>'admin'], function (){
    Route::get('/', 'AdminController@index');
    Route::get('/test', 'AdminController@test');
});