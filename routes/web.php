<?php
use App\Http\Controllers\cadastro;
use Illuminate\Support\Facades\Route;

Route::view("/","cadastro")->name('cadastro');

Route::post('/',[cadastro::class,'processoDeCadastro'] )->name("ca-post");

Route::view("login","login")->name('login');

Route::post("login",[cadastro::class,"login"])->name('processoLogin');

Route::view('/index','index')->name('index')->middleware('auth:web');

Route::get('logout', [cadastro::class,'logout'])->name('logout');