<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class config extends Controller
{
    public function alterarDadosUser(Request $req)
{
    $user = Auth::user();

    // Verifica se a senha atual está correta antes de fazer alterações
    if (!Hash::check($req->input('current_password'), $user->password)) {
        Session::flash('error', 'Senha atual incorreta. Alterações não foram salvas.');
        return redirect()->back();
    }
    // Atualiza os campos username e email
    $user->name = $req->input('username');
    $user->email = $req->input('email');
    
    // Verifica se a nova senha foi fornecida e a atualiza
    $newPassword = $req->input('password');
    if (!empty($newPassword)) {
        $user->password = bcrypt($newPassword);
    }

    $user->save(); // Salva as alterações

    Session::flash('success', 'Perfil atualizado com sucesso!');
    return redirect()->route('login'); // Redireciona para a página de perfil
}
}
