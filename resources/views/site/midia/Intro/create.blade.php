@extends('site.midia.main')


@section('content')
    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Adicionar Introdução do Site</h1>
        <br>
        <form action="{{route('site.storeIntro')}}" method="POST"  enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="image">Imagem do Evento:</label>
                <input type="file" id="image" name="image" class="from-control-file">
            </div>
            <div class="form-group">
                <label for="titulo">Titulo:</label>
                <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo">
            </div>
            <br>

            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <textarea name="descricao" id="descricao" class="form-control"
                    placeholder="Descrição"></textarea>
            </div>
            <br>
            <br>
            <input type="submit" class="btn btn-primary" value="Salvar">
        </form>
    </div>
@endsection
