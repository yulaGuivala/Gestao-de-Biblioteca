@extends('admin.template_admin.backoffice')

@section('conteudo')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                <h4 class="font-weight-bold mb-0">Livro</h4>
                </div>
                <div>
                    <a href="lista-livro.php" class="btn btn-light btn-icon-text btn-rounded">
                    <i class="ti-back-right btn-icon-prepend"></i>Voltar
                    </a>
                </div>
            </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Adicionar Novo livro</h4>
                        <p class="card-description">
                        Introduza os dados do novo livro
                        </p>

                        <form class="forms-sample" action="{{url('sgb-admin/livros/store')}}" method="POST" id="formulario" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-sm-6">
                                    <label for="Titulo">Titulo</label>
                                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo" minlength="3" required>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="Titulo">Autor</label>
                                    <input type="text" class="form-control" id="autor" name="autor" placeholder="Autor" minlength="3" required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-sm-6">
                                    <label for="Editora">Editora</label>
                                    <input type="text" class="form-control" id="Editora" name="editora" placeholder="Editora" minlength="3" required>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="Edicao">Edicao</label>
                                    <input type="number" class="form-control" id="Edicao" name="edicao" placeholder="Edicao" min="1" max="1000" required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-sm-6">
                                <label for="Pais">Pais</label>
                                <input type="text" class="form-control" id="Pais" name="pais" placeholder="Pais" minlength="3" required>
                                </div>
                                <div class="form-group col-sm-6">
                                <label for="Ano">Ano</label>
                                <input type="number" class="form-control" id="Ano" name="ano" placeholder="Ano" min="1000"  required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-sm-4">
                                    <label for="Qtd">Quantidade</label>
                                    <input type="number" class="form-control" id="Qtd" name="quantidade" placeholder="Numero de exemplares" min="1" max="1000" required>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="categoria">Categoria</label>
                                    <select id="categoria" name="categoria" class="form-control" required>
                                        <option value=""> Selecione...</option>
                                        <option value="Faculdade de Ciências politicas e Administração">Faculdade de Ciências politicas e Administração</option>
                                        <option value="Faculdade de Direito">Faculdade de Direito</option>
                                        <option value="Faculdade de Ciências Agrárias">Faculdade de Ciências Agrárias</option>
                                        <option value="Faculdade de Economia e Informática">Faculdade de Economia e Informática</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>Foto do Livro</label>
                                    <input type="file" id="foto-livro" name="img" accept="image/*" class="file-upload-default">
                                    <div class="input-group col-xs-12">
                                      <input type="text" class="form-control file-upload-info" disabled placeholder="Foto do Livro">
                                      <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-primary" type="button">Carregar</button>
                                      </span>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary mr-2">Confirmar</button>
                            <button type="reset" class="btn btn-light">Limpar</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('adicionar-livro')
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



