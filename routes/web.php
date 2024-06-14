<?php
use App\Http\Controllers\cadastro;
use Illuminate\Support\Facades\Route;

Route::view("/","cadastro")->name('cadastro');

Route::post('/',[cadastro::class,'processoDeCadastro'] )->name("ca-post");

Route::view("/login","login")->name('login');

Route::post("/login",[cadastro::class,"login"])->name('processoLogin');

Route::view('/index','index')->name('index')->middleware('auth:web');

Route::get('/logout', [cadastro::class,'logout'])->name('logout');

Route::view('/eletronicos','eletronicos')->name('eletronico')->middleware('auth:web');

Route::view('/configuracao','configuracao')->name('config')->middleware('auth:web');

Route::view('/configuracao/dados','editDados')->name('editDados')->middleware('auth:web');

Route::get('/email/vefify', function () {
    return view('verify-email');
})->name('verification.notice')->middleware('auth');
