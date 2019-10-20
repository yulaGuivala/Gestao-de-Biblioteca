
@extends('admin.template_admin.backoffice')

@section('title')
    Estudantes
@endsection

@section('conteudo')

                    <div class="row">
                        <div class="col-md-12 grid-margin">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h4 class="font-weight-bold mb-0">Mensagens</h4>
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
                                <h4 class="card-title mb-4">Mensagens Recebidas</h4>
                                <div class="table-responsive pb-0">
                                    <table class="table table-hover " id="tabela-dados">
                                    <thead>
                                        <tr >
                                        <th>
                                            <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" id="selecionar">                                           </label>
                                            </div>
                                        </th>
                                        <th>Assunto</th>
                                        <th>Remetente</th>
                                        <th>Data - hora</th>
                                        <th>Acção</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($listaMsg as $msg)
                                        <tr id="msg-{{$msg->id}}">
                                            <td>
                                                <div class="form-check form-check-flat form-check-primary">
                                                <label class="form-check-label">
                                                    <input type="checkbox" value="{{$msg->id}}" class="form-check-input estCheckbox">
                                                </label>
                                                </div>
                                            </td>
                                            <td>{{$msg->assunto}}</td>
                                            <td> {{$msg->email}}</td>
                                             <td>{{$msg->created_at}}</td>
                                            <td>
                                            <button data-toggle="modal" data-target="#mensagen-{{$msg->id}}" value="{{$msg->id}}" class="btn btn-rounded btn-info lerMsg">
                                                <i class="ti-eye"></i>Ler
                                            </button>
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

@push('modal-lerMensagem')
    @foreach ($listaMsg as $msg)
       <div class="modal fade" id="mensagen-{{$msg->id}}" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Assunto: {{$msg->assunto}}</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>

                <div class="modal-body">

                    <div class="container-fluid">

                        <div class="row">

                            <div class="col-12">

                                <p class="text-secondary">Email do Remetente: <span class="text-primary">{{$msg->email}}</span></p>

                                 <p class="text-secondary">Recebida: {{$msg->created_at}}</p>

                                <p>{{$msg->texto}}</p>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="modal-footer">
                    <a href="#" class="btn btn-primary">Enviar email</a>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Voltar</button>
                </div>

            </div>
        </div>
    </div>
    @endforeach

@endpush

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

            //apaga estudantes ao clicar butao apagar
            $('#apagar-estudante').click(function () {
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
                        text: "Não é possível reverter essa acção",
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
                    url: 'mensagens/apagar/' + id,
                    dataType: 'json',
                    success: function (data) {
                        console.log(data);
                        $("#msg-" + id).remove();
                    },
                    error: function (data) {
                        console.log('Error:', data);
                    }
                });
            }
        });

    </script>
@endpush
