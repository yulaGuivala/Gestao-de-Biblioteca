@extends('admin.template_admin.backoffice')

@section('title')
    Requisições
@endsection

@section('conteudo')
    <!-- content-wrapper  -->
    <div class="content-wrapper">

        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h4 class="font-weight-bold mb-0">Requisições</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Gerir Requisições</h4><hr>

                        <ul class="col-sm-11 nav nav-tabs ml-2 mb-3 bg-white" id="tipo" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active active1 texto-verde" id="" data-toggle="pill" href="#tipo1">Pendentes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link texto-verde" id="" data-toggle="pill" href="#tipo2">Levantados</a>
                            </li>
                        </ul>

                        <div class = "row justify-content-center bg-white">

                        <div class="col-sm-11 tab-content" id="nav-pills-tipo">

                            <div class="tab-pane fade show active" id="tipo1" role="tabpanel">
                                <div class="table-responsive pb-0">
                                    <table class="table table-hover col-12 mt-2" id="tabela-dados2">
                                        <thead>
                                            <tr>
                                                <th>Nr. de Estudante</th>
                                                <th>Nome</th>
                                                <th>Titulo do Livro</th>
                                                <th>Acção</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tabela-corpo1">
                                            @foreach ($requisicoes as $requisicao)
                                                @if ($requisicao->estado=='Pendente')
                                                    <tr>
                                                        <td>{{$requisicao->numero}}</td>
                                                        <td>{{$requisicao->nome}}</td>
                                                        <td>{{$requisicao->titulo}}</td>
                                                        <td>
                                                        <a href="{{route('confirmar',['idLivro'=>$requisicao->id,'idEst'=>$requisicao->idEst])}}">
                                                                <input type="button" class="btn btn-rounded btn-outline-primary" id="conf" value="Confirmar">
                                                            </a>
                                                            <a href="http://">
                                                                <input type="button" class="btn btn-rounded btn-outline-danger" id="canc" value="Cancelar">
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endif

                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="tipo2" role="tabpanel">
                                <div class="table-responsive pb-0">
                                    <table class="table table-hover col-12 mt-2" id="tabela-dados">
                                        <thead>

                                            <tr>
                                            <th>Nr. de Estudante</th>
                                            <th>Nome</th>
                                            <th>Titulo do Livro</th>
                                            <th>Data</th>
                                            <th>Acção</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tabela-corpo2">
                                        @foreach ($requisicoes as $requisicao)
                                            @if ($requisicao->estado=='Confirmado')
                                                <tr>
                                                    <td>{{$requisicao->numero}}</td>
                                                    <td>{{$requisicao->nome}}</td>
                                                    <td>{{$requisicao->titulo}}</td>
                                                    <td>{{$requisicao->data}}</td>
                                                    <td>
                                                        <input type="button" class="btn btn-rounded btn-outline-success" id="dev" value="Devolver">
                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div>
                </div>
            </div>
        </div>

    </div>
    <!-- content-wrapper ends -->
@endsection

@push('tabelas-js')
    <script>
        //cria datatable em pt
        dataTablePt('#tabela-dados2');
    </script>
@endpush

