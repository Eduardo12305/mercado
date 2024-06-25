<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="container">
<div class="row">
        <div class="col-md-4 mb-4">
            <div class="card movie-card">
                <a href="{{ route('filme.show', ['id' => $filme->id]) }}">
                    <img src="{{ asset("storage/img/".$filme->picture)}}" class="card-img-top" alt="{{ $filme->name }}">
                </a>
                <div class="card-body">
                    <h5 class="card-title">{{ $filme->name }}</h5>
                    <p class="card-text">Descrição: {{ $filme->description }}</p>
                    <p class="card-text">Data de Lançamento: {{ $filme->released }}</p>
                </div> 
            </div>
        </div>

    </div>
</div>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
