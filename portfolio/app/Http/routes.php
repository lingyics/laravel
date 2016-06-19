<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

// GET POST PUT DELETE

Route::get('about', function () {
    return '<h1>about page</h1>';
});

//as is a function calling as allias
Route::get('about/directions', array('as' => 'directionsAll',function () {
    $theURL = URL::route('directionsAll');
    return "this url is {$theURL}";
}));


Route::any('submit', function () {
    return '<h1>form</h1>';
});

Route::get('about/{subject}', function ($subject) {
    return $subject .' page';
});

Route::get('about/classes/{subject}', function ($subject) {
    return "page for $subject";
});


Route::get('about/classes/{theArt}/{theSomething}', function ($a,$b) {
   return "<h1>welcome to $a in $b</h1>";
});

//redirect two ways
Route::get('where',function(){
   return Redirect::to('about/directions');
    //return Redirect::route('directions');
});

