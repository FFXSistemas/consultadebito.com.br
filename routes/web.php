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

Route:: get('access/index',function (){
   return view('pages.index');
});

Route:: get('access/buy',function (){
   return view('pages.buy-credit');
});

Route:: get('access/attendance',function (){
   return view('pages.attendance');
});

Route:: get('access/query',function (){
   return view('pages.query');
});
