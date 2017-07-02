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

Route::get('id/{id}', function ($id) {
    echo 'This is my id :'.$id;
	//return view('welcome');
});

Route::get('age',[
   'middleware' => 'Age:110',
   'uses' => 'TestController@index',
]);

Route::get('names/{name}', function($name)
{
    $names = array(
      1 => "John",
      2 => "Mary",
      3 => "Steven"
    );
	
	return array( $name => $names[$name]);
});