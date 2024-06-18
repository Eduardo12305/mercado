Bem vindo a configuração <br>

Escolha uma opção:

<form action="{{route('logout')}}" method="get">
        <button  type="submit" style="color: white;">logout</button>
</form>

<form action="{{route('deleteUser')}}" method="post">
        @csrf
        @method('DELETE')
        <input type="hidden" name="userId" value="{{auth()->user()->id}}">

        <button type="submit"> deletar Usuarios</button>

</form>

    @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

<a href="{{route('alterdados')}}">
        <button type="button">alterar dados</button>
    </a>