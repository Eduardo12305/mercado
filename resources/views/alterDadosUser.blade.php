<!-- resources/views/editDados.blade.php -->


<form method="POST" action="{{ route('mudardados') }}">
    @csrf

    <!-- Campo para o nome de usuário -->
    <div class="form-group">
        <label for="username">Alterar nome de Usuário</label>
        <input type="text" id="username" name="username" value="{{ old('username', Auth::user()->name) }}" class="form-control">
    </div>

    <!-- Campo para o email -->
    <div class="form-group">
        <label for="email">Alterar Email</label>
        <input type="email" id="email" name="email" value="{{ old('email', Auth::user()->email) }}" class="form-control">
    </div>

    <!-- Campo para a senha atual -->
    <div class="form-group">
        <label for="current_password">Senha Atual</label>
        <input type="password" id="current_password" name="current_password" class="form-control">
    </div>

    <!-- Campo para a nova senha -->
    <div class="form-group">
        <label for="password">Nova Senha (opcional)</label>
        <input type="password" id="password" name="password" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Atualizar Perfil</button>
</form>
