<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class cadastro extends Controller
{
    public function processoDeCadastro(Request $req) {
        $user = $req->all();
    $name = $user["nome"];
    $senha = $user["senha"];
    $email = $user["email"];

    $res = User::create([
        'name'=> $name,
        'email' => $email,
        'password' => Hash::make($senha),
    ]);

    if ($res) {
        return redirect()->route('login');
    }else{
        return redirect()->route('cadastro')->with('error', 'aaa');
    }
    }

    public function login(Request $req) {
     $credentials = $req->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);
    if(Auth::attempt($credentials)) {
        $req->session()->regenerate();
        return redirect()->route('index');
    }else{
        return redirect()->route('login')->with('error','Não foi possivel fazer login');
    }
}

    public function logout(Request $req) {
        
        Auth::logout();
         
        $req->session()->invalidate();
         
        $req->session()->regenerateToken();
         
        return redirect('/');
        
    }

    public function deleteUser(Request $req) {

        $userId = $req->userId;


        //$user = User::find($req->user_id);
        Auth::logout();
         
        $req->session()->invalidate();
         
        $req->session()->regenerateToken();
        //$user->delete();

        $delete= User::destroy($userId);

        if($delete) {
        
            return redirect('/')->with('success', 'Usuário deletado com sucesso.');

        } else {
            return redirect('/index')->with('error', 'Erro ao deletar usuário.');
        } 

    }

}
