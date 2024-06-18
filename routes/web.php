<?php
use App\Http\Controllers\cadastro;
use App\Http\Controllers\config;

use Illuminate\Support\Facades\Route;

Route::view("/","cadastro")->name('cadastro');

Route::post('/',[cadastro::class,'processoDeCadastro'] )->name("ca-post");

Route::get("/login",function(){
    if(Auth::check()){
        return redirect("index");
    }
    return view("login");
})->name('login');

Route::post("/login",[cadastro::class,"login"])->name('processoLogin');

Route::view('/index','index')->name('index')->middleware('auth:web');

Route::post('/logout', [cadastro::class,'logout'])->name('logout');

Route::view('/filmes','filmes')->name('filmes')->middleware('auth:web');

Route::view('/configuracao','configuracao')->name('config')->middleware('auth:web');

Route::view('/dados','alterDadosUser')->name('alterdados')->middleware('auth:web');

Route::middleware(['auth'])->group(function () {
    Route::post('/mudardadosuser', [config::class, 'alterarDadosUser'])->name('mudardados');
});
Route::delete('/deleteUser', [cadastro::class,'deleteUser'])->name('deleteUser')->middleware('auth:web');


