@extends('user.template_user.headerUser')

@section('title')
    Perfil
@endsection

@section('directorio')
    <a href="index.php"><i class="fas fa-home mr-1"></i>Inicio</a> > Minha Conta >
    <span class="text-danger">Perfil</span>
@endsection

@section('titulo')
    Perfil
@endsection

@section('conteudo')
    <div class="row mb-3 justify-content-center">
        @if ($msg = Session::get('mensagem'))
            <div class="alert alert-success col-md-8">
                <p>{{$msg}}</p>
            </div>
        @endif
        <div class="col-md-8 mr-4">
            <h5>Meus Dados</h5>
        </div>
    </div>

    <div class="row justify-content-center">

            <form class="col-md-8" method="post" action="#" id="formulario">

                <div class="col-sm-12 border cor-creme cor-borda justify-content-center mb-10" id="geral">

                    <div class="form-row mt-3">
                        <label for="foto-perfil">Foto de Perfil</label>
                    </div>
                    <div class="form-row my-4 justify-content-center">

                            <div class="circle" id="foto-perfil">
                            <img class=" profile-pic" src="{{url('uploads/'.$estudante->user->ficheiro->nome)}}">
                            </div>
                            <div class="p-image">
                                <i class="fa fa-camera upload-button"></i>
                                <input class="file-upload d-none" type="file" accept="image/*"/>
                            </div>

                    </div>


                <div class="form-row">

                    <div class="form-group col-sm-12">

                        <label for="inputNome">Nome Sobrenome</label>
                        <input type="text" class="form-control" id="inputNome" name="nome" placeholder="Nome" max-lenght="60" value="{{$estudante->nome}}" required readonly>

                    </div>

                </div>

                <div class="form-row">

                    <div class="form-group col-sm-6">

                        <label for="inputCidade">E-mail</label>
                        <input type="email" class="form-control" id="inputMail" name="email" value="{{$estudante->user->email}}" placeholder="xxxxx@xx.com" required readonly>

                    </div>

                    <div class="form-group col-sm-6">

                        <label for="inputEst">Faculdade</label>
                        <select id="inputEst" name="facul" class="form-control" required disabled>
                            <option value=""> Selecione...</option>
                            <option @if ($estudante->faculdade == 'Faculdade de Políticas de Administração') {{"selected"}} @endif value="Faculdade de Políticas de Administração">Faculdade de Políticas de Administração</option>
                            <option @if ($estudante->faculdade == 'Faculdade de Direito') {{"selected"}} @endif value="Faculdade de Direito">Faculdade de Direito</option>
                            <option @if ($estudante->faculdade == 'Faculdade de Ciências Agrárias') {{"selected"}} @endif value="Faculdade de Ciências Agrárias">Faculdade de Ciências Agrárias</option>
                            <option @if ($estudante->faculdade == 'Faculdade de Economia e Informática') {{"selected"}} @endif value="Faculdade de Economia e Informática">Faculdade de Economia e Informática</option>
                        </select>

                    </div>

                    <div class="form-group col-sm-6">

                        <label for="inputID">Nr. de Estudante</label>
                        <input type="number" id="inputID" name="numero" value="{{$estudante->numero}}" class="form-control" min="20100000" max="99999999" required readonly>

                    </div>

                </div>

                <div class="form-row mt-3">
                    <div class="col-12">
                        <label for="inputEnd">Endereço</label>
                        <hr>
                    </div>
                </div>
                <div class="form-row mb-4">

                    <div class="form-group col-sm-3">

                        <label for="distrito">Distrito</label>
                        <select id="distrito" class="form-control" name="distrito" required disabled>
                            <option value=""> Selecione...</option>
                            <option @if ($estudante->endereco->distrito == 'Nlhamankulu') {{"selected"}} @endif value="Nlhamankulu">Nlhamankulu</option>
                            <option @if ($estudante->endereco->distrito == 'KaMpfumo') {{"selected"}} @endif value="KaMpfumo ">KaMpfumo </option>
                            <option @if ($estudante->endereco->distrito == 'KaMaxaquene') {{"selected"}} @endif value="KaMaxaquene">KaMaxaquene</option>
                            <option @if ($estudante->endereco->distrito == 'KaMavota') {{"selected"}} @endif value="KaMavota">KaMavota</option>
                            <option @if ($estudante->endereco->distrito == 'KaMubukwana') {{"selected"}} @endif value="KaMubukwana">KaMubukwana</option>
                            <option @if ($estudante->endereco->distrito == 'KaTembe') {{"selected"}} @endif value="KaTembe">KaTembe</option>
                            <option @if ($estudante->endereco->distrito == 'KaNyaka') {{"selected"}} @endif value="KaNyaka">KaNyaka</option>
                        </select>

                    </div>
                    <div class="form-group col-sm-3">

                        <label for="bairro">Bairro</label>
                    <input type="text" class="form-control" id="bairro" name="bairro" value="{{$estudante->endereco->bairro}}" placeholder="Bairro" max-lenght="100" required readonly>

                    </div>
                    <div class="form-group col-sm-3">

                        <label for="rua">Rua/Quarteirao</label>
                    <input type="text" class="form-control" id="rua" name="rua/quarteirao" value="{{$estudante->endereco->rua}}"placeholder="Rua" max-lenght="100" required readonly>

                    </div>
                    <div class="form-group col-sm-3">

                        <label for="rua">Nr. da Casa</label>
                        <input type="number" class="form-control" id="rua" name="casa" value="{{$estudante->endereco->casa}}" placeholder="Nr. da Casa" min="1" max="10000" required readonly>

                    </div>

                </div>
                <div class="form-row">

                    <div class="form-group col-sm-6">
                        <label for="senha">Senha</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" value="{{$estudante->user->password}}" minlength="6" maxlength="15" required readonly>
                            <span class="input-group-btn">
                                <button class="btn btn-sm btn-secondary" type="button" id="btn-senha"><i class="fa fa-eye"></i></button>
                            </span>
                        </div>
                        <label id="erro-senha" class="my-error-class"></label>
                    </div>

                      <div class="form-group col-sm-6 d-none" id="divcs">
                        <label for="csenha">Confirmar Senha</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="csenha" name="csenha" placeholder="Senha" value="{{$estudante->user->password}}" equalTo="#senha" minlength="6" maxlength="15" required>
                            <span class="input-group-btn">
                                <button class="btn btn-sm btn-secondary" type="button" id="btn-csenha"><i class="fa fa-eye"></i></button>
                            </span>
                        </div>
                        <label id="erro-csenha" class="my-error-class"></label>
                      </div>

                </div>
                <div class="form-row">

                    <div class="form-group col-sm-12">

                        <div class="form-check">

                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" checked> Desejo receber novidades por e-mail
                            </label>

                        </div>

                    </div>

                </div>

                <div class="form-row justify-content-center">
                    <div class="form-group col-12 text-center">
                        <button type="submit" class="btn btn-primary text-light d-none" id="confirmar">Confirmar</button>
                        <a href="index.php" class="btn btn-danger text-light d-none" id="cancelar">Cancelar</a>
                        <button type="button" id="habilitar" class="btn btn-info text-light ml-3">Habilitar Edição</button>
                    </div>
                </div>



                </div>

            </form>
    </div>
@endsection

<!-- css especifico dessa pagina -->
@push('registar-css')
    <link rel="stylesheet" href="{{asset('user/lib/profile-image/style.css')}}">
@endpush

<!-- js especifico dessa pagina -->
@push('registar-js')
    <script src="{{asset('user/lib/validate/jquery.validate.min.js')}}"></script>
    <script src="{{asset('user/lib/validate/jquery.validate.pt-br.js')}}"></script>
    <script src="{{asset('user/lib/profile-image/script.js')}}"></script>
@endpush
