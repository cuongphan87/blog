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

use Illuminate\Routing\Route;
use Illuminate\Routing\Router;

Router::get('/','client\IndexController@view');
// Router::any('{any?}','client\IndexController@view')->where('any','(.*)');


Router::get('/login','admin\LoginController@getLogin');

Router::post('/login','admin\LoginController@postLogin');

Router::get('/homeadmin','admin\HomeAdminController@getHome');

Router::post('/uploadfile','admin\UploadFileController@upload');
