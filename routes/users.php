<?php
use App\Http\Controllers\cadastro;
use App\Http\Controllers\config;

use Illuminate\Support\Facades\Route;

Route::view("/","cadastro")->name('cadastro');

Route::get("/login",function(){
    if(Auth::check()){
        return redirect("index");
    }
    return view("login");
})->name('login');

Route::view('/configuracao','configuracao')->name('config')->middleware('auth:web');

Route::middleware(['auth'])->group(function () {
    Route::post('/mudardadosuser', [config::class, 'alterarDadosUser'])->name('mudardados');
});

Route::controller(cadastro::class)->group(function (){
    Route::post('/','processoDeCadastro' )->name("ca-post");

    Route::post("/login","login")->name('processoLogin');

    Route::post('/logout', 'logout')->name('logout');

    Route::delete('/deleteUser', 'deleteUser')->name('deleteUser')->middleware('auth:web');

});