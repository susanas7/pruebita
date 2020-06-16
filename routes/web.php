<?php



//('/nombre de la ruta q queremos crear', 'nombre del archivo a llamar(home.blade.php)
//')->name es buena practica
Route::view('/inicio', 'inicio')->name('inicio');
Route::view('/about', 'about')->name('about');
Route::view('/portfolio', 'portfolio')->name('portfolio');
Route::view('/contact', 'contact')->name('contact');

Route::view('/home', 'home')->name('home');


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
?>
