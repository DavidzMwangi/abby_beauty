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

Route::get('/', function () {
    return view('welcome');
});

Route::get('home',function(){
    return view('home');
});



//create a special register screen

//save the picture of the new user
Route::post('addpic','RegisterController@savePic');

Route::get('index','IndexController@index');
Route::get('index2','IndexController@index2');


Route::get('top-nav','NavigationController@top');
Route::get('widget','WidgetController@widget');

//chart shit
Route::get('chartjs','ChartController@js');
Route::get('morris','ChartController@morris');
Route::get('flot','ChartController@flot');
Route::get('inline','ChartController@inline');


//UI shit
Route::get('buttons','UiController@button');
Route::get('general','UiController@general');
Route::get('icons','UiController@icons');
Route::get('modals','UiController@modals');
Route::get('sliders','UiController@sliders');
Route::get('timeline','UiController@timeline');

//form shit
Route::get('advanced','FormController@advanced');
Route::get('editors','FormController@editors');
Route::get('general','FormController@general');


//table shit
Route::get('data','TableController@data');
Route::get('simple','TableController@simple');

//calendar shit
Route::get('calendar','CalendarController@calendar');

//mail shit
Route::get('compose','MailController@compose');
Route::get('mailbox','MailController@mailbox');
Route::get('read-mail','MailController@read');








Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
