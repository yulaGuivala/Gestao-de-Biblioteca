@extends('user.template_user.headerUser')

@section('title')
    Contacte-nos
@endsection

@section('directorio')
    <a href="index.php"><i class="fas fa-home mr-1"></i>Inicio</a> >
    <span class="text-danger">Contacte-nos</span>
@endsection

@section('titulo')
    Contacte-nos
@endsection

@section('conteudo')
    <div class="container">
        <div class="row mb-3 justify-content-center">
            <div class="col-sm-8 mr-4">
                <h5>Formulário de Contacto</h5>
            </div>
        </div>

        <div class="row mb-5 justify-content-center" id="row-altura">
            <div class="col-sm-8  cor-borda2 cor-creme" id="cadastro">
            <form action="{{route('storeMensagem')}}" method="POST" class="px-2" id="formulario">
                    @csrf
                    <div class="form-row mt-3 justify-content-center">
                        <div class="form-group col-sm-10 ">
                            <label for="Assunto" >Assunto:</label>
                            <input type="text" name="assunto" class="form-control"  placeholder="Assunto" required>
                        </div>
                    </div>
                    <div class="form-row justify-content-center">
                        <div class="form-group col-sm-10">
                            <label for="Email" >Email:</label>
                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="form-row justify-content-center">

                        <div class="form-group col-sm-10">
                            <label for="Messagem">Messagem:</label>
                            <textarea class="form-control" name="texto" id="Messagem" cols="70" rows="7" minlength="10" required></textarea>
                        </div>

                    </div>

                    <p class="row justify-content-center">
                        <button class="btn btn-danger botoes mr-3" type="reset">Apagar</button>
                        <button class="btn btn-primary botoes" name="submeter" type="submit">Enviar</button>
                    </p>

                </form>
            </div>
        </div>
    </div>
@endsection

@push('registar-css')
    <link rel="stylesheet" href="{{asset('user/lib/sweetalert2/sweetalert2.min.css')}}">
@endpush

@push('registar-js')
    <script src="{{asset('user/lib/validate/jquery.validate.min.js')}}"></script>
    <script src="{{asset('user/lib/validate/jquery.validate.pt-br.js')}}"></script>
    <script src="{{asset('user/lib/profile-image/script.js')}}"></script>
    <script src="{{asset('user/lib/sweetalert2/sweetalert2.all.min.js')}}"></script>

    @if ($msg = Session::get('msgSucesso'))
        <?php  echo "
        <script>
            Swal.fire({
                title: 'Enviado!',
                text: $msg,
                type: 'success',
                confirmButtonText: 'OK'
            });
        </script>
        ";?>
    @elseif($msg = Session::get('msgErro'))
        <?php  echo "
        <script>
            Swal.fire({
                title: 'Erro!',
                text: $msg,
                type: 'error',
                confirmButtonText: 'OK'
            });
        </script>
        ";?>
    @endif
@endpush

