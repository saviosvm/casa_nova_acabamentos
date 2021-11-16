@extends('site.midia.main')


@section('content')

    <!-- Apresentação-->
    <div class="row">

        <div class="col-md-10 offset-md-1 dashboard-title-container">
            <h1>Painel de Controle</h1>
            <h3>Incio</h3>
        </div>
        
        <div class="col-md-10 offset-md-1 dashboard-events-container">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Imagem</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">
                            <a href="{{route('site.createIntro')}}" class="btn btn-primary">
                                <ion-icon name="arrow-down-outline"></ion-icon> Adicionar
                            </a>
                        </th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td >1</td>
                        <td >1</td>
                        <td >1</td>
                        <td >1</td>
                        <td>
                            <a href="{{route('site.editIntro', ['id' => 1])}}" class="btn btn-info edit.btn">
                                <ion-icon name="create-outline"></ion-icon> Editar
                            </a>
                        </td>
                        <td>
                            <form action="" method="post">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger delete-btn">
                                    <ion-icon name="trash-outline"></ion-icon> Deletar
                                </button>
                            </form>
                        </td>
                    </tr>
                   
                </tbody>

            </table>
        </div>
    </div>
    <br>

    <!-- Galeria-->

    <div class="row" style="margin-bottom: 10%">

        <div class="col-md-10 offset-md-1 dashboard-title-container">
            <h3>Galeria</h3>
        </div>
        
        <div class="col-md-10 offset-md-1 dashboard-events-container">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Imagem</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">
                            <a href="{{route('site.createIntro')}}" class="btn btn-primary">
                                <ion-icon name="arrow-down-outline"></ion-icon> Adicionar
                            </a>
                        </th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td >1</td>
                        <td >1</td>
                        <td >1</td>
                        <td >1</td>
                        <td>
                            <a href="{{route('site.editIntro', ['id' => 1])}}" class="btn btn-info edit.btn">
                                <ion-icon name="create-outline"></ion-icon> Editar
                            </a>
                        </td>
                        <td>
                            <form action="" method="post">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger delete-btn">
                                    <ion-icon name="trash-outline"></ion-icon> Deletar
                                </button>
                            </form>
                        </td>
                    </tr>
                  

                </tbody>

            </table>
        </div>
    </div>
    


@endsection
