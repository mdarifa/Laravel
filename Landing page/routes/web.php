<?php

Route::get('/', 'FrontController@forntpage');
Route::get('/team', 'FrontController@team');
Route::post('/contact/form/submit', 'FrontController@contactformsubmit');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/contact/message/view', 'HomeController@contactmessageview');
Route::get('contact/message/delete/{message_id}', 'HomeController@contactmessagedelete');
Route::get('contact/message/markasread/{message_id}', 'HomeController@contactmessagemarkasread');
Route::get('contact/message/edit/{message_id}', 'HomeController@contactmessageedit');
Route::post('contact/message/update', 'HomeController@contactmessageupdate');
Route::get('contact/message/restore/{message_id}', 'HomeController@contactmessagerestore');
Route::get('/admin/about', 'HomeController@adminabout');
Route::get('/admin/contact', 'HomeController@admincontact');
Route::post('/admin/about/insert', 'HomeController@adminaboutinsert');
Route::post('/admin/contact/update', 'HomeController@admincontactupdate');
Route::get('/admin/testimonial', 'HomeController@admintestimonial');
Route::post('/admin/ourwork/insert', 'HomeController@adminourworkinsert');
Route::get('/admin/ourwork', 'HomeController@adminourwork');
Route::post('/admin/testimonial/insert', 'HomeController@admintestimonialinsert');
Route::get('/admin/service', 'HomeController@adminservice');
Route::post('/admin/service/insert', 'HomeController@adminserviceinsert');
Route::get('/admin/about/active/{about_id}', 'HomeController@adminaboutactive');
