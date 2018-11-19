<?php

Route:: get('/','MaratonController@index');
Route:: get('consulta','MaratonController@consulta');
//Route:: get('exportar','MaratonController@exportar');
Route:: get('resultadosMaraton','MaratonController@resultadosMaraton');
Route:: get('reglamento','MaratonController@reglamento');

Route::resource('actualizacionResultados','UsuarioController');
Route::resource('inscripcionEquipos','InscripcionesController');