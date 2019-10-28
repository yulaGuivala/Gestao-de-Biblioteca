@extends('user.template_user.headerUser')

@section('title')
    Login
@endsection

@section('directorio')
    <a href="index.php"><i class="fas fa-home mr-1"></i>Inicio</a> > Minha Conta >
    <span class="text-danger">Entrar</span>
@endsection

@section('titulo')
    Entrar
@endsection

@section('conteudo')
   <?  ?>
    <!-- Acerca -->
    <div class="container">

        <div class="row justify-content-center">
            <form class="col-sm-10 col-md-8 col-lg-6" method="post" action="{{route('entrarE')}}" id="formulario">
                @csrf
                <div class="col-sm-12 border cor-creme cor-borda justify-content-center mb-5" id="geral">

                    <div class="form-row justify-content-center">
                        <div class="col-sm-10 mt-2 row justify-content-center">
                            <i class="fa fa-user-circle fa-4x " aria-hidden="true"></i>
                        </div>
                    </div>

                    <?php $msg = Session::get('mensagem2') ?>
                    <div class="form-row justify-content-center">
                    <div class="form-group col-sm-10 mt-2 {{isset($msg) ? 'my-error-class' : ''}}">
                            <label for="User">Nome de Usuario Ou Email</label>
                    <input type="text" class="form-control" name="nome" value="{{old('nome')}}" id="User" placeholder="Nome de Usuario ou Email" required>
                            @if (isset($msg))
                                <span class="help-block">
                                    {{$msg}}
                                </span>
                            @endif
                        </div>
                    </div>

                     <?php $msg1 = Session::get('mensagem1') ?>
                    <div class="form-row justify-content-center">
                        <div class="form-group col-sm-10 {{isset($msg1) ? 'my-error-class' : ''}}">
                            <label for="senha">Senha</label>
                        <input type="Password" class="form-control" name="senha" value='{{old('senha')}}' id="senha" placeholder="Senha" required>
                            @if (isset($msg1))
                                <span class="help-block">
                                    {{$msg1}}
                                </span>
                            @endif
                        </div>
                        <label>Esqueceu a senha? <a class="my-1" href="recuperar-senha.php">clique aqui</a> para recuperar<label>
                    </div>


                    <div class="form-row justify-content-center my-2">
                        <div class="col-sm-10">
                            <button class="btn  btn-primary" name="entrar" type="Submit">Entrar</button>
                        </div>
                    </div>

                </div>

            </form>
        </div>

        <div class="row justify-content-center">
            <div class="col-sm-10 col-md-8 col-lg-6">
                <p>Não tem uma conta? <a href="{{route('registrarE')}}">Registe-se </a></p>
            </div>
        </div>

    </div>
@endsection


<!-- js especifico dessa pagina -->
@push('registar-js')
    <script src="{{asset('user/lib/validate/jquery.validate.min.js')}}"></script>
    <script src="{{asset('user/lib/validate/jquery.validate.pt-br.js')}}"></script>
    <script src="{{asset('user/lib/profile-image/script.js')}}"></script>

@endpush
