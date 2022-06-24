<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Contrllers;


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

Route::get
(
    '/', function () 
    {return view('welcome');}
);

//---------------------------------------------------------------------------------------------


Route::get
(
    'Test', function()
     { return 'fuck you';}

)->name('Test');

//---------------------------------------------------------------------------------------------

Route::get
(
    'testcontroller', [App\HTTP\Controllers\TestController::class,'getString']
);

//---------------------------------------------------------------------------------------------


Route::get('middleware1', [App\HTTP\Controllers\MiddlewareController::class,'TestMiddleware1']);

Route::get('middleware2', [App\HTTP\Controllers\MiddlewareController::class,'TestMiddleware2']);

Route::get
(
    'middleware3', [App\HTTP\Controllers\MiddlewareController::class,'TestMiddleware3']
)->middleware('auth');

Route::get('login',function(){return 'Hello';})->name('login');

//---------------------------------------------------------------------------------------------

Route::resource('hi',App\HTTP\Controllers\ResourceController2::class);
//^
//|

/*
Route::get('hi',App\HTTP\Controllers\ResourceController2::class,'index');
Route::get('hi/create',App\HTTP\Controllers\ResourceController2::class,'create');
Route::get('hi/{id}/edit',App\HTTP\Controllers\ResourceController2::class,'edit');
Route::post('hi',App\HTTP\Controllers\ResourceController2::class,'store');
Route::post('hi/update/{id}',App\HTTP\Controllers\ResourceController2::class,'update');
Route::delete('hi/{id}',App\HTTP\Controllers\ResourceController2::class,'destroy');
*/

//---------------------------------------------------------------------------------------------

Route::get('view',function(){
    return view('Test')->with('data','View Data');
});

Route::get('viewarray',[App\HTTP\Controllers\ViewController::class,'viewArrayData']);
Route::get('viewobject',[App\HTTP\Controllers\ViewController::class,'ViewObjectData']);

//---------------------------------------------------------------------------------------------

Route::get('landing',function(){return view('LandingPage');});

//---------------------------------------------------------------------------------------------


Route::get('viewlang',function(){
    return view('Language');
});

//---------------------------------------------------------------------------------------------


Route::get('inhert',function(){return view('InhertPage');});

//---------------------------------------------------------------------------------------------


Route::get('directive',function(){return view('directives')->with('data','Mohammad');});
Route::get('directive',[App\HTTP\Controllers\ViewController::class,'arrayData']);
Route::get('directive',[App\HTTP\Controllers\ViewController::class,'jArrayData']);

//---------------------------------------------------------------------------------------------



Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');
