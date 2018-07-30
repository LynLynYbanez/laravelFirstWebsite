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
/*
Route:: get('shoutout/{text}', function ($text) {
	$colors = array(
           
             "red" => "for passion",
             "green" => "color of nature",
             "blue" => "it is the color of the sky",
             "white" => "pureness",
             "black" => "being bold",
             "silver" => "authentic",
             "yellow" => "warmth" 
	);
return view('shoutout',
       array(
       'text' => $text,
       'colors' => $colors
       ));
})->name ('shoutout');

*/

Route:: get('/foo', function() {
	return view('foo');
})->name('foo');


Route::get('/middleware/{age}', function ($age) {
	return view('age', array('age'=>$age));
})->middleware('age');