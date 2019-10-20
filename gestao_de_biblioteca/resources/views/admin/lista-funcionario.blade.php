@extends('admin.template_admin.backoffice')
@section('conteudo')
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h4 class="font-weight-bold mb-0">Funcionarios</h4>
                </div>
                <div>
                    <a href="{{url('sgb-admin/usuarios/adicionar-funcionario')}}"  class="btn btn-primary btn-icon-text btn-rounded" >
                        <i class="ti-plus btn-icon-prepend" ></i>Adicionar
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
                <h4 class="card-title mb-4">lista de Funcionarios</h4>
                <div class="table-responsive ">
                    <table class="table table-hover " id="tabela-dados">
                    <thead>
                        <tr>
                        <th>
                            <div class="form-check form-check-flat form-check-primary">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" id="selecionar">                                           </label>
                            </div>
                        </th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Endereço</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($funcionario as $func)
                        <tr>
                            <td>
                                <div class="form-check form-check-flat form-check-primary">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input">
                                </label>
                                </div>
                            </td>
                            <td>{{$func->nome}}</td>
                            <td>{{$func->user->email}}</i></td>
                            <td Class="text-secondary">
                                Distrito: {{$func->endereco->distrito}}<br>
                                Bairro: {{$func->endereco->bairro}}<br>
                                Rua: {{$func->endereco->rua}}<br>
                                N. da casa: {{$func->endereco->casa}}
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

