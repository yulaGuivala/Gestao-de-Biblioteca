@extends('admin.template_admin.backoffice')

@section('title')
    Perfil
@endsection

@section('conteudo')   
        <div class="row mb-3 justify-content-center">
            @if ($msg = Session::get('mensagem'))
                <div class="alert alert-success col-md-8">
                    <p>{{$msg}}</p>
                </div>
            @endif
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <h4 class="font-weight-bold mb-0">Perfil</h4>
                </div>
                <div>
                    <button type="button" id="habilitar" class="btn btn-info btn-rounded ml-3">Habilitar Edição</button>
                </div>
              </div>
            </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="alert alert-warning alert-dismissable d-none" id="alerta-msg">    
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>    Modo edição activado!
            </div>
          </div>
        </div>
        
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Seus Dados de Perfil</h4>
                  <p class="card-description" id="p-msg">
                    Habilite a edição para alterar os seus dados.
                  </p>
                  
                  <form class="forms-sample" method="POST" action="{{url("sgb-admin/usuarios/update")}}" id="formulario" enctype="multipart/form-data">
        
                    <div class="form-row">
                      <div class="form-group col-sm-6">
                        <label for="nome">Nome Sobrenome</label>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Primeiro nome" max-lenght="60" value="{{$funcionario->nome}}" required readonly>
                      </div>
                      <div class="form-group col-sm-6">
                        <label for="usuario">Nome de Usuário</label>
                        <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Nome de usuário" value="{{$funcionario->user->name}}"  minlength="3" maxlength="15" readonly required>
                      </div>
                    </div>
                    
                    <div class="form-row">
                      
                      
                    </div>
                    
                    <div class="form-row">
                      
                    <div class="form-group col-sm-6">
                        <label for="senha">Senha</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" value="{{$funcionario->user->password}}" minlength="6" maxlength="15" required readonly>
                            <span class="input-group-btn">
                                <button class="btn btn-sm btn-secondary" type="button" id="btn-senha"><i class="fa fa-eye"></i></button>
                            </span>
                        </div>
                        <label id="erro-senha" class="my-error-class"></label>
                    </div>

                      <div class="form-group col-sm-6 d-none" id="divcs">
                      <label for="inputCidade {{$errors->has('email') ? 'my-error-class' : ''}}">E-mail</label>
                        <input type="email" class="form-control" id="inputMail" name="email" value="{{$funcionario->user->email}}" placeholder="xxxxx@xx.com" required readonly>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                {{$errors->first('email')}}
                            </span>
                        @endif
                        
                      </div>

                    </div>

                    <div class="form-row">
                      <div class="form-group col-sm-12">
                        <label>Foto de Perfil</label>
                        <input type="file" name="img[]" class="file-upload-default" accept="image/*">
                        <div class="input-group col-xs-12">
                          <input type="text"  class="form-control file-upload-info" disabled placeholder="Foto de perfil" value="" required>
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" id="btn-foto" type="button" disabled>Carregar</button>
                          </span>
                        </div>
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="form-group col-12">
                        <button type="submit" class="btn btn-primary mr-2 mt-2 d-none" id="confirmar2">Confirmar</button>
                        <a href="index.php" class="btn btn-danger mt-2 d-none" id="cancelar">Cancelar</a>
                      </div>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>

@endsection
@push('registar-js')
    <script src="{{asset('user/lib/validate/jquery.validate.min.js')}}"></script>
    <script src="{{asset('user/lib/validate/jquery.validate.pt-br.js')}}"></script>
    <script src="{{asset('user/lib/profile-image/script.js')}}"></script>
    <script src="{{asset('user/lib/sweetalert2/sweetalert2.all.min.js')}}"></script>

    @if ($msg = Session::get('mensagem'))
        <?php  echo "
        <script>
            Swal.fire({
                title: 'Feito!',
                text: $msg,
                type: 'success',
                confirmButtonText: 'OK'
            });
        </script>
        ";?>
    @endif


@endpush

