<?php

/**
 * Verificar se a rota é válida
 * php artisan route:list
 */
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuario', function(){
    return view('usuario');
});

Route::get('/amanda', function(){
    return view('amanda');
});

/**
 * Utilizando parâmetros que permitem retornar o que você pesquisa na url
 */
Route::get('/users/{param}/{parami}', function($param, $parami){
    return $param . '-' . $parami;
});

Route::prefix('usuarios')-> group(function(){
    Route::get('/edit', function(){
        return 'edit';
    });

    Route::get('/save', function(){
        return 'save';
    });

    Route::get('/delete', function(){
        return 'delete';
    });
});

Route::get('/dados-de-usuario/{user}', function(\App\Models\User $user){
    return $user;
});
