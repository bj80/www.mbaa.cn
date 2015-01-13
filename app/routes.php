<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::group(array('domain' => 'mbaa.cn'), function()
{
    return Redirect::to('http://www.mbaa.cn/');
});

Route::get('/', function()
{
    return View::make('index.index', array('head_title' => 'MBAA - 晨钟校友联谊会' , 'body' => 'Welcome to MBAA'));
    //return View::make('master', array('head_title' => 'MBAA - 晨钟校友联谊会' , 'body' => 'Welcome to MBAA'));
    //return 'hey mbaa';
});

Route::get('dlc', function()
{
    return View::make('static.dlc', array('head_title' => '晨光文学社 - MBAA.cn'));
});
Route::get('dlc/publication', function()
{
    return View::make('static.fdlc.publication', array('head_title' => '出版物 - MBAA.cn' ));
});
Route::get('dlc/inscribe', 'InscribeController@InscribeList');

Route::get('mbaa', function()
{
    return View::make('static.mbaa', array('head_title' => '晨钟校友联谊会 - MBAA.cn'));
});

Route::get('story', 'StoryController@StoryList');
Route::get('story/{sid}', 'StoryController@StoryShow');

Route::get('member', 'MemberController@MemberList');

Route::get('about', function()
{
    return View::make('static.about', array('head_title' => '关于 - MBAA.cn'));
});

Route::get('notice', function(){
return Redirect::to('/');
});
Route::get('notice/{nid}', 'NoticeController@NoticeShow');

Route::get('json', function()
{
    //return View::make('hello');
    return Response::json(array('name' => 'Karen', 'state' => 'CA'));
});



App::missing(function($exception)
{
    //return Response::view('errors.missing', array(), 404);
    return Redirect::to('/');
    return 'sorry 404';
});
