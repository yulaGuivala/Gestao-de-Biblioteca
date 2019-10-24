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
                    <button type="button" id="apagar-funcionario" class="btn btn-danger btn-icon-text btn-rounded">
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
                        <tr id="funcionario-{{$func->id}}">
                            <td>
                                <div class="form-check form-check-flat form-check-primary">
                                    <label class="form-check-label">
                                        <input type="checkbox" value="{{$func->id}}" class="form-check-input estCheckbox">
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


@push('apagar-meta')
 <meta name="csrf-token" content="{{csrf_token()}}">
@endpush

@push('tabelas-css')
    <link rel="stylesheet" href="{{asset('user/lib/sweetalert2/sweetalert2.min.css')}}">
@endpush

@push('tabelas-js')

    <script src="{{asset('user/lib/sweetalert2/sweetalert2.all.min.js')}}"></script>

    <script>
        //realisa procedimentos para apagar dados
        $(document).ready(function() {
            $('#apagar-funcionario').click(function () {
                var selecionado = 0;

                $('input.estCheckbox:checkbox:checked').each(function () {
                    selecionado = 1;
                });

                if(selecionado == 1) {//verifica se existe um check box selecionado
                    //cria butoes com classes bootstrap
                    const swalWithBootstrapButtons = Swal.mixin({
                        customClass: {
                            confirmButton: 'btn btn-success',
                            cancelButton: 'btn btn-danger'
                        },
                        buttonsStyling: false
                    });

                    //implementa uma modal amigavel
                    swalWithBootstrapButtons.fire({
                        title: 'Tem certeza?',
                        text: "Se apagar os dados selecionados, o(s) respectivo(s) funcionario(s)  perde(m) acesso a plataforma.",
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'Apagar',
                        cancelButtonText: 'Cancelar',
                        reverseButtons: true
                    }).then((result) => {
                        if (result.value) { //caso selecione apagar
                            $('input.estCheckbox:checkbox:checked').each(function () {
                                apagarDados(this.value);
                            });
                            swalWithBootstrapButtons.fire(
                            'Apagado!',
                            'Os dados selecionados foram apagados.',
                            'success'
                            );
                        } else if ( result.dismiss === Swal.DismissReason.cancel) { //caso selecione cancelar
                            swalWithBootstrapButtons.fire(
                            'Cancelado',
                            'Seus dados estão seguros :)',
                            'error'
                            )
                        }
                    })
                } else { //caso nao tenha selecionado um checkbox
                    Swal.fire('Selecione uma opcao!');
                }
            });

            //implementa ajax para apagar dados na bd
            function apagarDados(id) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "GET",
                    url: 'apagar-func/' + id,
                    dataType: 'json',
                    success: function (data) {
                        console.log(data);
                        $("#funcionario-" + id).remove();
                    },
                    error: function (data) {
                        console.log('Error:', data);

                    }
                });
            }
        });

    </script>
@endpush

