<!DOCTYPE html>
<html lang="en">
<head>
<?php
	session_start();
	if(!isset($_SESSION['nomeAdmin'])){
    //return view('admin.login');

	}
?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @stack('apagar-meta')
    <title>@yield('title')| Admin</title>

    <link rel="stylesheet" href="{{asset('user/node_modules/bootstrap/compiler/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('user/style/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('user/lib/fontawesome/css/all.css')}}">
    <link rel="shortcut icon" href="{{asset('user/imags/favicon.png')}}" />
    <link rel="stylesheet" href="{{ asset('admin/vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/base/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('user/lib/datatables/dataTables.bootstrap4.min.css')}}">
    <link rel="shortcut icon" href="{{ asset('user/imgs/favicon.png')}}"/>
    @stack('tabelas-css')
</head>
<body>
    <div class="container-scroller">

        <!-- Navbar: includes/componetes.php -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">

      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
      <a class="navbar-brand brand-logo mr-5" href="{{url('/')}}"><b class="ml-4 text-danger" style="font-size:30px; font-family: 'Playfair Display', serif;">BDUNA</b></a>
        <a class="navbar-brand brand-logo-mini" href="{{url('/')}}"><img src="{{ asset('user/imgs/mini-logo.jpg')}}" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="ti-view-list"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="ti-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Pesquisar" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown mr-3">
            <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-toggle="dropdown">
              <i class="ti-email mx-0"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="messageDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Mensagens</p>
              <a class="dropdown-item" href="{{url('sgb-admin/mensagens')}}">
                <div class="item-thumbnail">
                   <i class="ti-list display-4"></i>
                </div>
                <div class="item-content flex-grow">
                  <h6 class="ellipsis font-weight-normal">Ver todas Mensagens
                  </h6>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                    <img src="images/faces/face4.jpg" alt="image" class="profile-pic">
                </div>
                <div class="item-content flex-grow">
                  <h6 class="ellipsis font-weight-normal">David Grey
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    The meeting is cancelled
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                    <img src="images/faces/face2.jpg" alt="image" class="profile-pic">
                </div>
                <div class="item-content flex-grow">
                  <h6 class="ellipsis font-weight-normal">Tim Cook
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    New product launch
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                    <img src="images/faces/face3.jpg" alt="image" class="profile-pic">
                </div>
                <div class="item-content flex-grow">
                  <h6 class="ellipsis font-weight-normal"> Johnson
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    Upcoming board meeting
                  </p>
                </div>
              </a>
            </div>
          </li>

          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" id="profileDropdown">
              <img src="{{asset('user/imgs/perfil2.png')}}" alt="foto de Perfil" />
              <i class="ti-angle-double-down"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item" href="{{url('sgb-admin/usuarios/perfil')}}">
                <i class="ti-user text-primary"></i>
                Perfil
              </a>
              <a class="dropdown-item" href="{{url('sgb-admin/usuarios/sair')}}">
                <i class="ti-power-off text-primary"></i>
                Sair
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="ti-view-list"></span>
        </button>
      </div>
    </nav>

        <!-- page-body-wrapper (corpo) -->
        <div class="container-fluid page-body-wrapper">

            <!-- Sidebar: includes/componetes.php-->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">

          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="ti-shield menu-icon"></i>
              <span class="menu-title">Painel de Controle</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#usuarios" aria-expanded="false" aria-controls="auth">
              <i class="ti-user menu-icon"></i>
              <span class="menu-title">Usuários</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="usuarios">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="{{url('sgb-admin/usuarios/funcionario')}}">Funcionários</a>
                  <a class="nav-link d-none" href="{{url('sgb-admin/usuarios/adicionar-funcionario')}}">Adicionar Funcionário</a>
                  <a class="nav-link d-none" href="registo-de-logs.php">Adicionar Funcionário</a>
                </li>
                <li class="nav-item"> <a class="nav-link" href="{{url('sgb-admin/usuarios/estudantes')}}">Estudantes</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#livros" aria-expanded="false" aria-controls="livros">
              <i class="ti-book menu-icon"></i>
              <span class="menu-title">Livros</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="livros">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="{{url('sgb-admin/livros/lista')}}">Catalogo de Livros</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('sgb-admin/livros/adicionar-livro')}}">Adicionar Livro</a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="lista-requisicoes.php">
              <i class="ti-write menu-icon"></i>
              <span class="menu-title">Requisições</span>
            </a>
          </li>

        </ul>
    </nav>

            <!-- main-panel (conteudo)-->
            <div class="main-panel">

                <!-- content-wrapper  -->
                <div class="content-wrapper">
                    @yield('conteudo')
                </div>
                <!-- content-wrapper ends -->

                <!--footer: includes/componetes.php -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <script>document.write(new Date().getFullYear());</script> <a href="#" target="_blank">DeadLock</a>. Todos direitos reservados.</span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Feito à mão & com <i class="ti-heart text-danger ml-1"></i></span>
                    </div>
                </footer>

            </div>
            <!-- main-panel ends -->

        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    @stack('modal-lerMensagem')

    <!-- plugins:js -->
    <script src="{{ asset('admin/vendors/base/vendor.bundle.base.js') }}"></script>
    <script src="{{asset('user/node_modules/jquery/dist/jquery.min.js')}}"></script>

    <script src="{{ asset('admin/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{asset('js/file-upload.js')}}"></script>

    <script src="{{ asset('admin/js/off-canvas.js') }}"></script>
    <script src="{{ asset('admin/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('admin/js/template.js') }}"></script>
    <script src="{{ asset('admin/js/todolist.js') }}"></script>

    <script src="{{ asset('admin/js/dashboard.js') }}"></script>

    <script src="{{ asset('user/lib/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('user/lib/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('user/lib/datatables/datatable.pt-br.js') }}"></script>
    <script src="{{ asset('admin/js/script-admin.js') }}"></script>
    @stack('tabelas-js')

</body>

</html>
