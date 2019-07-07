<?php

function favicon() {
    echo '  <link rel="stylesheet" href="style/css/font.css" />
            <link rel="shortcut icon" href="imags/mini-logo.jpg" />
        ';
}

function cabecalho() {
?>
<div class="">
    <div class="row ">   
                    <div class="col-12 ">
                        <div class="collapse navbar-collapse float-left ml-3">
                            
                            <img src="imgs/logo.jpg">
                            <a href="index.php" class="text-danger link" style="text-decoration:none">
                                <b class="ml-4" style="font-size:30px; font-family: 'Playfair Display', serif;">SGB</b> <sub>Sistema de Gestão da Biblioteca</sub>
                            </a>
                        </div>
                        
                        <div class="float-right mr-3">
                            <ul class="navbar-nav list-group-horizontal float-right mt-2">
                                <li class="nav-item mt-2">
                                    <a href="#" class="link text-danger" data-toggle="modal" data-target="#livros"><i class="fas fa-book mr-1"></i>Caixa de Livros <sup class="badge bg-warning" style="position:relative; right:5px;">3</sup></a>
                                </li>
                                <li class="nav-item dropdown ml-3">
                        
                                    <a class="nav-link dropdown-toggle text-danger" href="#" data-toggle="dropdown"  id="logo"><i
                                            class="fas fa-user mr-1"></i>Minha conta</a>
                                    <div class="dropdown-menu bg-danger">
                                        <a class="dropdown-item" href="login.php">Entrar</a>
                                        <a class="dropdown-item" href="registar.php">Registar</a>
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
                            <li>
                                <a class="navbar-brand mb-0" href="index.php"><i class="fa fa-home"></i> Inicio</a>
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
</div>
<?php
}

function rodape() {
?>
    <footer class="container-fluid page-footer">
        
        <div class="row">
            <div class="col-12">
                <a  class="btn btn-warning float-right" href="#logo">voltar ao topo</a>
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
                                
                                <input type="text" class="form-control" id="pesq" placeholder="nome do livro">
                                <span class="input-group-btn">
                                    <button class="btn btn-warning" type="button"><i class="fa fa-search"></i></button>
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
<?php
}

?>