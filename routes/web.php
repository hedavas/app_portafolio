<?php

//use Symfony\Component\Routing\Annotation\Route;


//Route::get('test', function(){
//     $user = new App\User;
//     $user->name = 'Fernando';
//     $user->email = 'fer@gmail.com';
//     $user->password =  bcrypt('123123');

//     $user->save();

//     return $user;
// });





Route::view('/', 'home')->name('home');

Route::view('/about', 'about')->name('about');

Route::get('/portfolio', 'ProjectController@index')->name('projects.index');
Route::get('/portfolio/crear', 'ProjectController@create')->name('projects.create');

Route::get('/portfolio', 'ProjectController@store')->name('projects.store');

Route::get('/portfolio/{project}', 'ProjectController@show')->name('projects.show');


Route::view('/contact', 'contact')->name('contact');
Route::post('contacto', 'PagesController@mensajes');




//Route::get('/', ['as' => 'home', 'uses' => 'PagesController@home']);

//Route::get('/saludos/{nombre?}', ['as' => 'saludos', 
//'uses' => 'PagesController@saludo'])->where('nombre', "[A-Za-z]+");

//Route::resource('mensajes', 'MessagesController');

//Route::get('login', 'Auth\LoginController@showLoginForm');

//Route::post('login', 'Auth\LoginController@login');

//Route::get('logout', 'Auth\LoginController@logout');
//Route::get('/contactame', ['as' => 'contactos', 'uses'=> 'PagesController@contact']);

//Route::post('contacto', 'PagesController@mensajes');


//Route::get('mensajes', ['as' => 'messages.index', 'uses' => 'MessagesController@index']);

//Route::get('mensajes/create', ['as' => 'messages.create', 'uses' => 'MessagesController@create']);

//Route::post('mensajes', ['as' => 'messages.store', 'uses' => 'MessagesController@store']);

//Route::get('mensajes/{id}', ['as' => 'messages.show', 'uses' => 'MessagesController@show']);

//Route::get('mensajes/{id}/edit', ['as' => 'messages.edit', 'uses' => 'MessagesController@edit']);

//Route::put('mensajes/{id}', ['as' => 'messages.update', 'uses' => 'MessagesController@update']);

//Route::delete('mensajes/{id}', ['as' => 'messages.destroy', 'uses' => 'MessagesController@destroy']);