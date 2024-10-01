<?php

use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/

//Ruta pagina de inicio
Route::get('/', function () {
    return view('pages.home');
});

// Ruta para la página de registro
Route::get('/register', function () {
    return view('pages.register');  
});

// Ruta para la página de inicio de sesión
Route::get('/login', function () {
    return view('pages.login');  
});

// Ruta para la página de perfil de músico
Route::get('/musiclist', function () {
    return view('pages.musiclist');  
});

// Rutas para los perfiles de los músicos
Route::get('/profilemusic1', function () {
    return view('pages.profilemusic1');
});

Route::get('/profilemusic2', function () {
    return view('pages.profilemusic2');
});

Route::get('/profilemusic3', function () {
    return view('pages.profilemusic3');
});
