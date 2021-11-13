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
                        <th>
                            <a href="{{route('site.createIntro')}}" class="btn btn-outline-light">
                                <ion-icon name="arrow-down-outline"></ion-icon> Adicionar
                            </a>
                        </th>
                    </tr>
                </thead>

                <tbody>

                </tbody>

            </table>
        </div>
    </div>
    <br><br><br>

    <!-- Galeria-->

    <div class="row">

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
                    </tr>
                </thead>

                <tbody>

                </tbody>

            </table>
        </div>
    </div>


@endsection
