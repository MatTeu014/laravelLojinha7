<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('components/home');
});

Route::get('logar', function () {
    return view('components/logar');
});

Route::get('cadastrar', function () {
    return view('components/cadastrarFuncionario');
});

Route::get('homeLogado', function(){
    return view('components/homeLogado');
});