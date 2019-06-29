<!doctype html>
<html lang="pt-br">
  <head>
    <title>Inicio de sessão</title>
      
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">
      
    <link rel="stylesheet" href="style/css/style.css">
      
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.css">
      
  </head>

  <body>
  <header class=" position-relative fixed-top navbar-expand-sm">
                <div id="primera" class="row">
                        <div class="col-12">
                            <div class="collapse navbar-collapse float-left ml-3">
                                <h1 id="big" class="fonte">Sistema de Gestão de Biblioteca</h1>
                            </div>
                            
                            <div class="fonte float-right mr-3" >
                               <!-- <script>document.write(new Date().getDate());</script>/
                                <script>document.write(new Date().getMonth()+1);</script>/
                                <script>document.write(new Date().getFullYear());</script><br>
                                <script>document.write(new Date().getHours());</script>
                                :&nbsp;<script>document.write(new Date().getMinutes());</script>-->
                                <img src="imgs/logo1.jpg ">
                            </div>
                        </div>
                        
                </div>
                <!-- Navbar -->
                <nav class="navbar cor-vermelho navbar-dark navbar-expand-lg">
                
                    <div class="container">
                
                        <a class="navbar-brand h1 mb-0" href="index.html"><i class="fa fa-home"></i> Inicio</a>
            
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
                        <span class="navbar-toggler-icon"></span>
                        </button>
            
                        <div class="collapse navbar-collapse" id="navbarSite">
            
                            <ul class="navbar-nav mr-auto">
            
                                    <li class="nav-item dropdown cor-vermelho dropdown-dark">
                                
                                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">
                                                Livros
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="catalogos.html">Catalogo da Biblioteca presencial</a>
                                                <a class="dropdown-item" href="#">Leitura online</a>
                                                <a class="dropdown-item" href="#">Revistas</a>
                                            </div>
                                        
                                    </li>
            
                                <li class="nav-item">
                                    <a class="nav-link" href="#about" data-target="">Acerca da plataforma</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Conctate-nos</a>
                                </li>
            
                            </ul>
                            
                            <ul class="navbar-nav ml-auto">
                            
                                
                            
                            </ul>
                
                        </div>
                        
                    </div>
                
                </nav>
   </header>

    <div class="container">
        
        <div class="row justify-content-center">
            <form class="col-md-6" method="post" action="autenticacao.php">
            
                <div class="col-sm-12 border cor-creme cor-borda justify-content-center mb-10" id="geral">
            
                    <div class="form-row justify-content-center">
                        <div class="col-sm-10 mt-2 row justify-content-center">
                            <i class="fa fa-user-circle fa-4x" aria-hidden="true"></i>
                        </div>
                    </div>
            
                    <div class="form-row justify-content-center">
                        <div class="form-group col-sm-10 mt-2">
                            <label for="User">Nome de Usuario Ou Email</label>
                            <input type="text" class="form-control" name="nome" id="User" placeholder="Nome de Usuario ou Email" required>
                        </div>
                    </div>
            
            
                    <div class="form-row justify-content-center">
                        <div class="form-group col-sm-10">
                            <label for="senha">Senha</label>
                            <input type="Password" class="form-control" name="senha" id="senha" placeholder="Senha" required>
                            <a class="my-1" href="recuperar-senha.php">Esqueceu a senha? clique aqui para recuperar.</a>
                        </div>
                    </div>
            
            
                    <div class="form-row justify-content-center my-2">
                        <div class="col-sm-10">
                            <button class="btn  btn-primary" name="entrar" type="Submit">Entrar</button>
                        </div>
                    </div>

                    <div class="form-row justify-content-center my-2">
                        <div class="col-sm-10">
                            Se ainda não tem uma conta clique <a class="my-1" href="cadastro-estudante.php">aqui</a> para criar.
                        </div>
                    </div>
            
                </div>
            
            </form>
        </div>
        
    </div>
  </body>

</html>