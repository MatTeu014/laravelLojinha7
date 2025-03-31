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

Route::get('funcionario', function(){
    return view('components/funcionarioHome');
});

Route::get('funcionarioEditar', function(){
    return view('components/funcionarioEditar');
});

Route::get('funcionarioAdicionar', function(){
    return view('components/funcionarioAdicionar');
});

Route::get('produtosHome', function(){
    return view('components/produtosHome');
});

Route::get('produtosEditar', function(){
    return view('components/produtosEditar');
});

Route::get('produtosAdicionar', function(){
    return view('components/produtosAdicionar');
});