<?php

function favicon() {
    echo '<link rel="shortcut icon" href="../imgs/favicon.png" />';
}

function navbar() {
?>
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="index.php"><b class="ml-4 text-danger" style="font-size:30px; font-family: 'Playfair Display', serif;">SGB</b></a>
        <a class="navbar-brand brand-logo-mini" href="index.php"><img src="../imgs/favicon.png" alt="logo"/></a>
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
              <a class="dropdown-item" href="lista-msg.php">
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
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="../imgs/perfil.png" alt="perfil" />
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item" href="perfil.php">
                <i class="ti-user text-primary"></i>
                Perfil
              </a>
              <a class="dropdown-item" href="login.php">
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
<?php
}

function sidebar() {
?>
  <link rel="stylesheet" href="css/Untitled-1.css">
  <div id="barraMenu">
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
                  <a class="nav-link" href="lista-funcionario.php">Funcionários</a>
                  <a class="nav-link d-none" href="adicionar-funcionario.php">Adicionar Funcionário</a>
                  <a class="nav-link d-none" href="registo-de-logs.php">Adicionar Funcionário</a>
                </li>
                <li class="nav-item"> <a class="nav-link" href="lista-estudantes.php">Estudantes</a></li>
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
                  <a class="nav-link" href="lista-livro.php">Catalogo de Livros</a>
                </li>
                <li class="nav-item"> 
                  <a class="nav-link" href="adicionar-livro.php">Adicionar Livro</a>
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
</div>
<?php
}

function footer() {
?>
    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <script>document.write(new Date().getFullYear());</script> <a href="#" target="_blank">DeadLock</a>. Todos direitos reservados.</span>
        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Feito à mão & com <i class="ti-heart text-danger ml-1"></i></span>
        </div>
    </footer>
<?php
}
?>