
<!doctype html>
<html lang="pt-br">
 <head>
    <title>@yield('title')| BDUNA</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="{{asset('user/node_modules/bootstrap/compiler/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('user/style/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('user/lib/fontawesome/css/all.css')}}">
    <link rel="shortcut icon" href="{{asset('user/imags/favicon.png')}}" />
    @stack('registar-css')



</head>
 <body>

    <header class="container-fluid navbar-expand-md">
        <div class="row ">
            <?php
                $user = Cookie::get('user');
                $id = Cookie::get('idE');
                $foto = Cookie::get('foto');
            ?>
            @if (isset($user) && isset($id))
                <!-- Cavecalho Autenticado -->
                <div class="col-12 ">

                    <div class="collapse navbar-collapse float-left ml-3">
                        <img src="{{asset('user/imgs/logo.jpg')}}">
                        <a href="{{url('/')}}" class="text-danger link" style="text-decoration:none">
                            <b class="ml-4" style="font-size:30px; font-family: 'Playfair Display', serif;">BDUNA</b> <sub>Biblioteca Digital UNA</sub>
                        </a>
                    </div>

                    <div class="navbar-toggler float-left mt-3 mr-3">
                        <a href="{{url('/')}}" class="text-danger link text-center" style="text-decoration:none">
                            <b style="font-size:30px; font-family: 'Playfair Display', serif;">BDUNA</b>
                        </a>
                    </div>

                    <div class="float-right mr-3">
                        <ul class="navbar-nav list-group-horizontal float-right mt-2">
                            <li class="nav-item ">
                                <a href="#" class="link text-danger" data-toggle="modal" data-target="#livros"><i class="fas fa-book mr-1"></i>Caixa de Livros <sup class="badge bg-warning" style="position:relative; right:5px;">3</sup></a>

                                <a class="nav-link d-inline dropdown-toggle text-danger" href="#" data-toggle="dropdown"  id="logo">
                                    <img class="perfil-foto d-none d-md-inline" src="{{asset("uploads/$foto")}}">
                                    {{$user}}
                                </a>
                                <div class="dropdown-menu bg-danger">
                                    <a class="dropdown-item" href="{{url("inicio/minha-conta/$id/perfil")}}">Perfil</a>
                                    <a class="dropdown-item" href="{{route('sairE')}}">Sair</a>
                                </div>

                            </li>
                        </ul>
                    </div>
                </div>

            @else
                <!-- Cabecalho -->
                <div class="col-12 ">

                    <div class="collapse navbar-collapse float-left ml-3">
                        <img src="{{asset('user/imgs/logo.jpg')}}">
                        <a href="{{url('/')}}" class="text-danger link" style="text-decoration:none">
                            <b class="ml-4" style="font-size:30px; font-family: 'Playfair Display', serif;">BDUNA</b> <sub>Biblioteca Digital UNA</sub>
                        </a>
                    </div>

                    <div class="navbar-toggler float-left mt-3 mr-3">
                        <a href="{{url('/')}}" class="text-danger link text-center" style="text-decoration:none">
                            <b style="font-size:30px; font-family: 'Playfair Display', serif;">BDUNA</b>
                        </a>
                    </div>

                    <div class="float-right mr-3">
                        <ul class="navbar-nav list-group-horizontal float-right mt-2">
                            <li class="nav-item dropdown ml-3">
                                <a class="nav-link dropdown-toggle text-danger" href="#" data-toggle="dropdown"  id="logo"><i
                                        class="fas fa-user mr-1"></i>Minha conta</a>
                                <div class="dropdown-menu bg-danger">
                                    <a class="dropdown-item" href="{{route('loginE')}}">Entrar</a>
                                    <a class="dropdown-item" href="{{route('registrarE')}}">Registar</a>
                                </div>

                            </li>
                        </ul>
                    </div>
                </div>
            @endif
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
                            <a class="nav-link" href="{{url('/')}}"><i class="fa fa-home"></i> Inicio</a>
                        </li>
                        <li class="nav-item dropdown cor-vermelho dropdown-dark">
                            <a class="nav-link" href="{{route('catalogo')}}">Catálogo de Livros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/inicio')}}" data-target="">Sobre Nós</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('contacto')}}">Conctate-nos</a>
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
        @if (!isset($titulo))
           <div class="container">
            <div class="row mt-3">
                <div class="col-sm-12">
                    <p id="dir">
                        @yield('directorio')
                    </p>
                    <hr class="bg-danger">
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-12">
                    <h1>@yield('titulo')</h1>
                </div>
            </div>
        </div>
        @endif

    </div>
    </header>

    @yield('conteudo')

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
                            <li><a href="{{url('/')}}">Inicio</a></li>
                            <li><a href="{{route('catalogo')}}">Catálogo de Livros</a></li>
                            <li><a href="{{url('/inicio')}}">Sobre nós</a></li>
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

                            <li class="list-inline-item"><a href="{{route('contacto')}}"><i class="fas fa-envelope"></i></a></li>
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
    <?php// modalLivros(); ?>

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

    <script src="{{asset('user/node_modules/jquery/dist/jquery.js')}}"></script>
    <script src="{{asset('user/node_modules/popper.js/dist/umd/popper.js')}}"></script>
    <script src="{{asset('user/node_modules/bootstrap/dist/js/bootstrap.js')}}"></script>
    <script src="{{asset('user/js/script.js')}}"></script>
    @stack('registar-js')
    @stack('sobre-nos')
  </body>
</html>
