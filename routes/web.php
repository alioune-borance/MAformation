<?php

use Illuminate\Support\Facades\Route;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/',['as'=>'home','uses'=>'Controller@home']);

Route::get('/formations',['as'=>'formations','uses'=>'Controller@formations']);

Route::get('/about',['as'=>'about','uses'=>'Controller@about']);

Route::get('/faq',['as'=>'faq','uses'=>'Controller@faq']);

Route::post('/question',['as'=>'question','uses'=>'Controller@question']);

Route::get('/question',['as'=>'adminQuestion','uses'=>'Controller@adminQuestion']);

Route::get('/modules',['as'=>'modules','uses'=>'Controller@modules']);


Route::post('/repondreQuestion/{idQ}',['as'=>'repondreQuestion','uses'=>'Controller@repondreQuestion']);