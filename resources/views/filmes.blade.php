<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="css/index.css">
</head>
<body>
<div class="container">
    <div class="row">
        @foreach ($filmes as $filme)
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
        @endforeach
    </div>
</div>



            
    <!-- Modal -->
<div class="modal fade" id="createMovieModal" tabindex="-1" role="dialog" aria-labelledby="createMovieModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createMovieModalLabel">Create Movie</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{route('enviarMovies')}}" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label for="released">Released Date and Time</label>
                        <input type="datetime-local" class="form-control" id="released" name="released" required>
                    </div>
                    <div class="form-group">
                        <label for="genre_id">Genre</label>
                        <select class="form-control" id="genre_id" name="genre_id" required>
                            <option value="">Select Genre</option>

                            @foreach ($generos as $genero)
                                <option value="{{$genero->id}}">{{$genero->name}}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="form-group">
                            <label for="UploadImg">Adicionar Imagem</label>
                            <input id="UploadImg" name="picture" type="file" accept="image/*">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>

            
           
        </div>
    </div>
</div>

        <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createMovieModal">
        Create Movie
    </button>



</body>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>