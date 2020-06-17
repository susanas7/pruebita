<?php



//('/nombre de la ruta q queremos crear', 'nombre del archivo a llamar(home.blade.php)
//')->name es buena practica

Route::get('/', 'MainController@home');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



?>
