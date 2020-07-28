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
//
//Route::get('/', array('as' => 'Admin.home', function () {
//
//    $url = view('blade-scafolding.layout.master');
//    //NickName
//    route('Admin.home');
//    return $url;
//}));

//@Training DO NOT FORGET TO CHANGE LINK
//Route::get('/Controller/{id}', 'PostController@index');
//@Training
//Route::resource('/Post/{id}', 'PostController');

//Route::resource('Posts', 'PostController');

Route::get('/Osteopage', function () {
    return view('blade-scafolding.Osteopage');
});
Route::get('/home', function () {
    return view('blade-scafolding.home');
});
Route::get('/', function () {
    return view('blade-scafolding.home');
});

Route::get('/music', function () {
    return view('blade-scafolding.masterGrid');
});
Route::get('/Music', function () {
    return view('blade-scafolding.masterGrid');
});
Route::get('/404', function () {
    return view('blade-scafolding.404');
});
Route::get('/test', function () {
    return view('blade-scafolding.404');
});

//passing Variable Training
//// @Training
//Route:: get('/locally/{id}/{sayHello}', function ($id, $sayHello) {
//    return "hello" . "\n" . $sayHello . ".." . "\nYour ID is : " . $id;
//});

