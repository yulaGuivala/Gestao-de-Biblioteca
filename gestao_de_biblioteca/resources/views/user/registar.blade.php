<!doctype html>
<html lang="pt-br">
  <head>
    <title>Cadastro de Estudante</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="{{asset('user/node_modules/bootstrap/compiler/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('user/style/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('user/lib/fontawesome/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('user/lib/profile-image/style.css')}}">
    <link rel="shortcut icon" href="{{asset('user/imags/mini-logo.jpg')}}" />
  </head>

  <body>
        <header class="container-fluid navbar-expand-md mb-5">
        <div class="row ">
            <div class="col-12 ">

                <div class="collapse navbar-collapse float-left ml-3">
                    <img src="imgs/logo.jpg">
                    <a href="index.php" class="text-danger link" style="text-decoration:none">
                        <b class="ml-4" style="font-size:30px; font-family: 'Playfair Display', serif;">SGB</b> <sub>Sistema de Gestão da Biblioteca</sub>
                    </a>
                </div>

                <div class="navbar-toggler float-left mt-3 mr-3">
                    <a href="index.php" class="text-danger link text-center" style="text-decoration:none">
                        <b style="font-size:30px; font-family: 'Playfair Display', serif;">SGB</b>
                    </a>
                </div>

                <div class="float-right mr-3">
                    <ul class="navbar-nav list-group-horizontal float-right mt-2">
                        <li class="nav-item ">
                            <a href="#" class="link text-danger" data-toggle="modal" data-target="#livros"><i class="fas fa-book mr-1"></i>Caixa de Livros <sup class="badge bg-warning" style="position:relative; right:5px;">3</sup></a>

                            <a class="nav-link d-inline dropdown-toggle text-danger" href="#" data-toggle="dropdown"  id="logo">
                                <img class="perfil-foto d-none d-md-inline" src="imgs/perfil.png">
                                Jose Pedro
                            </a>
                            <div class="dropdown-menu bg-danger">
                                <a class="dropdown-item" href="perfil.php">Perfil</a>
                                <a class="dropdown-item" href="#">Sair</a>
                            </div>

                        </li>
                    </ul>
                </div>
            </div>

        </div>

        <!-- Navbar -->
        <nav class="row navbar cor-vermelho navbar-dark navbar-expand-md">

            <div class="container">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSite">

                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php"><i class="fa fa-home"></i> Inicio</a>
                        </li>
                        <li class="nav-item dropdown cor-vermelho dropdown-dark">
                            <a class="nav-link" href="catalogo.php">Catálogo de Livros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php#about" data-target="">Sobre Nós</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contacto.php">Conctate-nos</a>
                        </li>

                    </ul>

                    <form class="form-inline">

                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="nome do livro"  required>
                                <span class="input-group-btn">
                                    <button class="btn btn-warning" type="submit"><i class="fa fa-search"></i></button>
                                </span>
                            </div>

                    </form>

                </div>

            </div>

        </nav>

    </div>
        <div class="container">

            <div class="row mt-3">
                <div class="col-sm-12">
                    <p id="dir"><a href="index.php"><i class="fas fa-home mr-1"></i>Inicio</a> > Minha Conta > <span
                            class="text-danger">Registar</span></p>
                    <hr class="bg-danger">
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h1>Registar</h1>
                </div>
            </div>

        </div>
    </header>
    <div class="row mb-3 justify-content-center">
        <div class="col-md-8 mr-4">
            <h5>Formulário de Cadastro</h5>
        </div>
    </div>

    <div class="row justify-content-center">

            <form class="col-md-8" action="{{url('inicio/minha-conta/store')}}" method="post"  id="formulario">
                {{ csrf_field() }}
                <div class="col-sm-12 border cor-creme cor-borda justify-content-center mb-10" id="geral">
                    <div class="form-row mt-3">
                        <label for="foto-perfil">Foto de Perfil</label>
                    </div>
                    <div class="form-row my-4 justify-content-center">

                            <div class="circle" id="foto-perfil">
                                <img class=" profile-pic" src="imgs/perfil.png">
                            </div>
                            <div class="p-image">
                                <i class="fa fa-camera upload-button"></i>
                                <input class="file-upload d-none" name="foto" type="file" accept="image/*"/>
                            </div>

                    </div>


                <div class="form-row">

                    <div class="form-group col-sm-6">

                        <label for="inputNome">Nome</label>
                        <input type="text" class="form-control" id="inputNome" name="nome" placeholder="Nome" max-lenght="30" required>

                    </div>

                    <div class="form-group col-sm-6">

                        <label for="inputSobrenome">Sobrenome</label>
                        <input type="text" class="form-control" id="inputSobrenome" name="sobrenome" placeholder="Sobrenome" max-lenght="30" required>

                    </div>

                </div>

                <div class="form-row">

                    <div class="form-group col-sm-6">

                        <label for="inputCidade">E-mail</label>
                        <input type="email" class="form-control" id="inputMail" name="email" placeholder="xxxxx@xx.com" required>

                    </div>

                    <div class="form-group col-sm-6">

                        <label for="inputEst">Faculdade</label>
                        <select id="inputEst" name="facul" class="form-control" required>
                            <option value=""> Selecione...</option>
                            <option value="Faculdade de Ciências politicas e Administração">Faculdade de Ciências politicas e Administração</option>
                            <option value="Faculdade de Direito">Faculdade de Direito</option>
                            <option value="Faculdade de Ciências Agrárias">Faculdade de Ciências Agrárias</option>
                            <option value="Faculdade de Economia e Informática">Faculdade de Economia e Informática</option>
                        </select>

                    </div>

                    <div class="form-group col-sm-6">

                        <label for="inputID">Nr. de Estudante</label>
                        <input type="number" id="inputID" name="numero" class="form-control" min="1" max="99999999" placeholder="Nr. de Estudante" required>

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
                        <select id="distrito" class="form-control" name="distrito" required="">
                            <option value=""> Selecione...</option>
                            <option value="Nlhamankulu">Nlhamankulu</option>
                            <option value="KaMpfumo ">KaMpfumo </option>
                            <option value="KaMaxaquene">KaMaxaquene</option>
                            <option value="KaMavota">KaMavota</option>
                            <option value="KaMubukwana">KaMubukwana</option>
                            <option value="KaTembe">KaTembe</option>
                            <option value="KaNyaka">KaNyaka</option>
                        </select>

                    </div>
                    <div class="form-group col-sm-3">

                        <label for="bairro">Bairro</label>
                        <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro" max-lenght="100" required>

                    </div>
                    <div class="form-group col-sm-3">

                        <label for="rua">Rua</label>
                        <input type="text" class="form-control" id="rua" name="rua" placeholder="Rua" max-lenght="100" required>

                    </div>
                    <div class="form-group col-sm-3">

                        <label for="rua">Nr. da Casa</label>
                        <input type="number" class="form-control" id="casa" name="casa" placeholder="Nr. da Casa" min="1" max="1000" required>

                    </div>

                </div>

                <div class="form-row">

                    <div class="form-group col-sm-6">
                        <label for="senha">Senha</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha"  minlength="4" maxlength="15" required>
                            <span class="input-group-btn">
                                <button class="btn btn-sm btn-secondary" type="button" id="btn-senha"><i class="fa fa-eye"></i></button>
                            </span>
                        </div>
                        <label id="erro-senha" class="my-error-class"></label>
                    </div>

                      <div class="form-group col-sm-6" id="divcs">
                        <label for="csenha">Confirmar Senha</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="csenha" name="csenha" placeholder="Senha"  equalTo="#senha" minlength="4" maxlength="15" required>
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
                                <input class="form-check-input" type="checkbox"> Desejo receber novidades por e-mail
                            </label>

                        </div>

                    </div>

                </div>

                <div class="form-row justify-content-center">
                    <div class="form-group col-12 text-center">
                        <button type="submit" class="btn btn-primary text-light" data-dismiss="modal">Confirmar</button>
                        <button type="reset" class="btn btn-danger text-light ml-3" data-dismiss="modal">Limpar</button>
                    </div>

                </div>



                </div>

            </form>
    </div>
    <!-- footer -->
     <footer class="container-fluid page-footer mt-5">

        <div class="row">
            <div class="col-12">
                <a  class="btn btn-warning float-right" href="#logo"><i class="fa fa-arrow-up"></i> voltar ao topo</a>
            </div>
        </div>

        <div class="row mt-2 p-3 footer-border dark-grey-text" style="background-color: rgba(0,0, 0, .7); color: #888888;">
            <div class="col-12 ">
                <div class="row">

                    <div class="col-md-3 d-none d-md-none d-lg-block">
                        <h4>Categorias</h4>
                        <ul>
                            <li><a href="index.php">Inicio</a></li>
                            <li><a href="catalogo.php">Catálogo de Livros</a></li>
                            <li><a href="index.php#about">Sobre nós</a></li>
                        </ul>
                    </div>

                    <div class="col-md-3 d-none d-md-none d-lg-block">

                        <h4>Endereço</h4>
                        <address class="text-warning">
                            <strong>Biblioteca Central da <br> Universidade Nachingwea, Campus.</strong><br>   Rua 7 de Abril<br>   Matola, Bairro da Machava Sede <br>Telefone: 872949420
                        </address>
                    </div>

                    <div class="col-lg-3  col-sm-6">
                        <form class="form-inline">
                            <label for="pesq">Pesquise por um livro</label>
                            <div class="input-group">

                                <input type="text" class="form-control" id="pesq" placeholder="nome do livro" required>
                                <span class="input-group-btn">
                                    <button class="btn btn-warning" type="submit"><i class="fa fa-search"></i></button>
                                </span>
                            </div>

                        </form>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <h5> Contactacte-nos</h5>
                        <ul class="list-unstyled footer-icone" style="font-size: 40px;">

                            <li class="list-inline-item"><a href="contacto.php"><i class="fas fa-envelope"></i></a></li>
                        </ul>
                        <h4>Site da Universidade</h4>
                        <a href="http://www.una.ac.mz" class="link" target="blank">www.una.ac.mz</a>

                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center footer-copyright py-1 border-top-1 bg-dark" >
            <div class="col-10 text-center text-light"> Universidade Nachingwea &copy; <script>document.write(new Date().getFullYear());</script>- Todos Direitos Reservados </div>
        </div>

    </footer>

    <!-- Modal caixa de livros-->
    <div class="modal fade" id="livros" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Caixa de Livros</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="container-fluid">
                    <div class="row">
                    <div class="col-12">
                        <div class="table-responsive cor-borda3 pb-0">
                        <table class="table table-bordered table-hove mb-0" id="tabela-doencas">
                            <thead >
                                <tr class="cor-creme">
                                    <td class="titulo-tabela" colspan="5"><i class="fa fa-list mr-2"></i>Lista de livros selecionados</td>

                                </tr>
                                <tr>
                                <tr>
                                    <th class=" text-center" style="width:2px;">
                                        <input type="checkbox" id="checklivros">
                                    </th>
                                    <th class="text-danger">Titulo</th>
                                    <th class="text-danger">Autor</th>
                                    <th class="text-danger">Edição</th>
                                    <th class="text-danger">Ano</th>
                                </tr>
                            </thead>
                            <tbody>
                            <tbody id="tabela-corpo">
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td>sfsfdfs</td>
                                    <td>sfsfdfs</td>
                                        <td>sfsfdfs</td>
                                    <td>sfsfdfs</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td>sfsfdfs</td>
                                    <td>sfsfdfs</td>
                                        <td>sfsfdfs</td>
                                    <td>sfsfdfs</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td>sfsfdfs</td>
                                    <td>sfsfdfs</td>
                                        <td>sfsfdfs</td>
                                    <td>sfsfdfs</td>
                                </tr>
                            </tbody>
                            </table>
                            </div>
                    </div>
                    </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-primary text-light">Comfirmar Requisição</button>
                    <button type="button" class="btn btn-danger text-light">Eliminar</button>
                </div>

            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('user/node_modules/jquery/dist/jquery.js')}}"></script>
    <script src="{{asset('user/node_modules/popper.js/dist/umd/popper.js')}}"></script>
    <script src="{{asset('user/node_modules/bootstrap/dist/js/bootstrap.js')}}"></script>
    <script src="{{asset('user/lib/validate/jquery.validate.min.js')}}"></script>
    <script src="{{asset('user/lib/validate/jquery.validate.pt-br.js')}}"></script>
    <script src="{{asset('user/js/script.js')}}"></script>
    <script src="{{asset('user/lib/profile-image/script.js')}}"></script>

  </body>

</html>
