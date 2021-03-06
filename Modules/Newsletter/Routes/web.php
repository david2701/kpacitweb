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

Route::prefix('newsletter')->middleware(['auth','admin'])->group(function () {
    Route::get('/setting', 'NewsletterController@setting')->name('newsletter.setting')->middleware('RoutePermissionCheck:newsletter.setting');
    Route::post('/setting-update', 'NewsletterController@update')->name('newsletter.setting.update')->middleware('RoutePermissionCheck:newsletter.setting.update');
    Route::get('/mailchimp/setting', 'MailchimpController@setting')->name('newsletter.mailchimp.setting')->middleware('RoutePermissionCheck:newsletter.mailchimp.setting');
    Route::post('/mailchimp/setting', 'MailchimpController@settingStore')->name('newsletter.mailchimp.settingStore')->middleware('RoutePermissionCheck:newsletter.mailchimp.settingStore');
    Route::get('/getresponse/setting', 'GetResponseController@setting')->name('newsletter.getresponse.setting')->middleware('RoutePermissionCheck:newsletter.getresponse.setting');
    Route::post('/getresponse/setting', 'GetResponseController@settingStore')->name('newsletter.getresponse.settingStore')->middleware('RoutePermissionCheck:newsletter.getresponse.settingStore');

});
