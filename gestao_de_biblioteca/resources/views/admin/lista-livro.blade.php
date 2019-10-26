@extends('admin.template_admin.backoffice')

@section('conteudo')
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h4 class="font-weight-bold mb-0">Livros</h4>
                </div>
                <div>
                    <a href="adicionar-livro.php" class="btn btn-primary btn-icon-text btn-rounded">
                        <i class="ti-plus btn-icon-prepend"></i>Adicionar
                    </a>
                    <button type="button" class="btn btn-danger btn-icon-text btn-rounded">
                        <i class="ti-trash btn-icon-prepend"></i>Apagar
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title mb-4">lista de livros</h4>
                <div class="table-responsive ">
                    <table class="table table-hover " id="tabela-dados">
                    <thead>
                        <tr>
                        <th>
                            <div class="form-check form-check-flat form-check-primary">
                            <label class="form-check-label">
                                <input type="checkbox" id="selecionar" class="form-check-input">                                           </label>
                            </div>
                        </th>
                        <th>Titulo</th>
                        <th>Autor</th>
                        <th>Editora</th>
                        <th>Faculdade</th>
                        <th>Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($livros as $livro)
                            <tr>
                                <td>
                                    <div class="form-check form-check-flat form-check-primary">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input">
                                    </label>
                                    </div>
                                </td>
                                <td>{{$livro->titulo}}</td>
                                <td>{{$livro->autor}}</td>
                                <td>{{$livro->Editora}}</td>
                                <td>{{$livro->categoria->nome}}</td>
                                <td>
                                    <a href="#" class="btn btn-outline-success btn-icon-text btn-rounded">
                                        <i class="ti-pencil btn-icon-prepend"></i>Editar
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>
    </div>

@endsection

