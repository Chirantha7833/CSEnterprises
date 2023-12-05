<?php

use App\Models\SupportForm;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ResponseController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('home');
});

Route::get('/homepage', 'App\Http\Controllers\HomeController@home');
Route::get('/aboutus', 'App\Http\Controllers\AboutUsController@aboutus');
Route::get('/contactus', 'App\Http\Controllers\ContactUsController@contactus');
Route::get('/portfolio', 'App\Http\Controllers\PortFolioController@portfolio');
Route::get('/frontendform', 'App\Http\Controllers\FrontEndFormController@frontendform');

Route::post('/sendform', 'App\Http\Controllers\FrontEndFormController@datasend');
Route::get('/frontendform', 'App\Http\Controllers\FrontEndFormController@readdata');
Route::get('/delete', 'App\Http\Controllers\FrontEndFormController@delete');

#responses
Route::get('/success', 'App\Http\Controllers\ResponseController@success');
Route::get('/failed', 'App\Http\Controllers\ResponseController@failed');
#responses









