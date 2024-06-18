<!-- dropdown.blade.php -->
<div class="dropdown float-right">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton">
        Opções
    </button>
    <div class="dropdown-menu dropdown-menu-right" id="dropdownMenu" style="display: none"> 
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button class="dropdown-item" type="submit">Logout</button>
        </form>
        <a class="dropdown-item" href="{{ route('config') }}">Configuração</a>
    </div>
</div>

<!-- Bootstrap JS -->
<script>
    var dropdownButton = document.getElementById('dropdownMenuButton');
    var dropdownMenu = document.getElementById('dropdownMenu');

    dropdownButton.addEventListener('click', function(){
        if(dropdownMenu.style.display == 'none'){
            dropdownMenu.style.display = 'block';
        } else {
            dropdownMenu.style.display = 'none';
        }
    })
  
</script>
