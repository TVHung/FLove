<?php

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




Route::group(['prefix'=>'/','middleware'=>'logout'],function()
{
        
    //home
    Route::get('/', 'PageController@homePage')->name('page.index');
        
    //login
    Route::get('login', 'Auth\LoginController@login_index')->name('login.index');
    Route::post('login', 'Auth\LoginController@login')->name('login');


    //Register
    Route::get('register', 'Auth\RegisterController@register')->name('register.index');
    Route::post('register', 'Auth\RegisterController@postRegister')->name('postRegister');
    
    //ForgotPassword
    Route::get('forgotPassword', 'Auth\ForgotPasswordController@forgotPassword')->name('forgotPassword');
    Route::post('sendMail', 'Auth\ForgotPasswordController@sendMail')->name('sendMail');
    Route::get('reset/{token}', 'Auth\ForgotPasswordController@reset')->name('reset');
    Route::get('resetPassword','Auth\ForgotPasswordController@getresetPassword')->name('getresetPassword');
    Route::post('resetPassword', 'Auth\ForgotPasswordController@resetPassword')->name('resetPassword');
    //composer require nesbot/carbon

    
    
});



Route::group(['prefix'=>'/','middleware'=>'login'],function()
{   
    //home after login
    Route::get('home', 'PageController@homePage_after_login')->name('home.index');
    
    //edit_infor
    Route::get('edit_infor', 'Auth\EditController@edit_infor')->name('edit_infor.index');
    Route::post('edit_infor', 'Auth\EditController@post_infor')->name('postEditInfor');
    
    //update_infor
    Route::get('update', 'Auth\UpdateController@update')->name('update.index');
    Route::post('update', 'Auth\UpdateController@postUpdate')->name('postUpdate');

    //function1: expeter
    Route::get('expeter_list', 'PageController@expeter_list')->name('expeter_list.index');
    Route::get('expecter_list', 'PageController@postExpecter')->name('postExpecter');
    Route::get('expeter_result', 'PageController@expeter_result')->name('expeter_result.index');

    //logout
    Route::get('logout', 'Auth\LoginController@logout')->name('logout');


    //show information
    Route::get('information', 'PageController@information')->name('information');

    //change password
    Route::get('changePassword', 'PageController@changePassword')->name('changePassword.index');
    Route::post('changePassword', 'PageController@postchangePassword')->name('changePassword');


    
    //function2: heart choice
    Route::get('heart_choice_list', 'PageController@heart_choice_list')->name('hc_list.index');
    Route::get('heart_choice_detail/{id}', 'PageController@heart_choice_detail')->name('hc_detail.index');

    //request dating
    Route::post('sendMessage', 'PageController@sendMessage')->name('sendMessage');
    Route::get('accept/{id}', 'PageController@accept')->name('accept');
    Route::get('denine/{id}', 'PageController@denine')->name('denine');
    Route::get('seeInfor/{id}', 'PageController@seeInfor')->name('seeInfor');
    Route::get('allNotifi', 'PageController@allNotifi')->name('allNotifi');

    //couple 
    Route::get('couple', 'PageController@couple')->name('couple');
    Route::get('break', 'PageController@break')->name('break');
    
});
