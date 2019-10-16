
@extends('admin.template_admin.backoffice')
@section('conteudo')
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h4 class="font-weight-bold mb-0">Estudantes</h4>
                </div>
                <div>
                    <button type="button" id="apagar-estudante" class="btn btn-danger btn-icon-text btn-rounded">
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
                <h4 class="card-title mb-4">lista de Estudantes</h4>
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
                        <th>N<sup>o</sup> de Estudante</th>
                        <th>Email</th>
                        <th>Faculdade</th>
                        <th>Endereço</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($estudantes as $est)
                        <tr>
                            <td>
                                <div class="form-check form-check-flat form-check-primary">
                                <label class="form-check-label">
                                    <input type="checkbox" value="{{$est->id}}" class="form-check-input estCheckbox">
                                </label>
                                </div>
                            </td>
                            <td>{{$est->nome}}</td>
                            <td>{{$est->numero}}</td>
                            <td>{{$est->user->email}}</i></td>
                            <td>{{$est->faculdade}}</td>
                            <td Class="text-secondary">
                                Distrito: {{$est->endereco->distrito}}<br>
                                Bairro: {{$est->endereco->bairro}}<br>
                                Rua: {{$est->endereco->rua}}<br>
                                N. da casa: {{$est->endereco->casa}}
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

@push('apagar-js')
    <script>
        $('#apagar-estudante').click(function () {
            //alert('sss');
            formData = new FormData(); //objecto que envia dados pelo metodo POST
            cont = 0;
            $('input.estCheckbox:checkbox:checked').each(function () {
                formData.append("cb-" + cont, this.value);
            });
            $.post('sgb-admin/usuarios/apagar',formData);
        });
    </script>
@endpush
