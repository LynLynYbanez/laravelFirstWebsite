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

Route::get ('/bar', function() {
	return view('bar');
})->name('bar');


Route::get('/middleware/{age}', function ($age) {
	return view('age', array('age'=>$age));
})->middleware('age');


Route::get('/pages/contact','PagesController@contactPage');

Route::get('/pages/middleware/{age}','PagesController@middlewareAgePage');

Route::get('crushes','CrushesController@index');

Route::get( '/crushes/create', 'CrushesController@create' )->name( 'crushes.create' );

Route::post( '/crushes/store', 'CrushesController@store' )->name( 'crushes.store' );

Route::post( '/crushes', 'CrushesController@index' )->name( 'crushes.index' );

Route::get( '/crushes/{id}/edit', 'CrushesController@edit' )->name( 'crushes.id.edit' );

Route::post( '/crushes/{id}/update', 'CrushesController@update' )->name( 'crushes.id.update' );

Route::get( '/crushes/{id}/destroy', 'CrushesController@destroy' )->name( 'crushes.id.destroy' );