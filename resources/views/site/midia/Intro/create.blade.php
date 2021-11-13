@extends('site.midia.main')


@section('content')
    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Adicionar Introdução do Site</h1>
        <br>
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="image">Imagem:</label>
                <input type="file" id="image" name="image" class="from-control-file">
            </div>
            <div class="form-group">
                <label for="title">Titulo:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Titulo">
            </div>
            <br>

            <div class="form-group">
                <label for="description">Texto:</label>
                <textarea name="description" id="description" class="form-control"
                    placeholder="Texto"></textarea>
            </div>
            <br>
            <br>
            <input type="submit" class="btn btn-primary" value="Salvar">
        </form>
    </div>
@endsection
