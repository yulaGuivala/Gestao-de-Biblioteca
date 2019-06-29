<!doctype html>
<html lang="pt-br">
  <head>
    <title>Cadastro de Estudante</title>
      
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
        </header><br><br><br><br><br>

    <div class="row justify-content-center">
            <form class="col-md-6" method="post" action="autenticacao.php">
            
                <div class="col-sm-12 border cor-creme cor-borda justify-content-center mb-10" id="geral">
            
                    <div class="form-row justify-content-center">
                        <div class="col-sm-10 mt-2 row justify-content-center">
                            <i class="fa fa-user-circle fa-4x" aria-hidden="true"></i>
                        </div>
                    </div>
            
                
                <div class="form-row">
                    
                    <div class="form-group col-sm-6">
                
                        <label for="inputNome">Nome</label>
                        <input type="text" class="form-control" id="inputNome" placeholder="Nome">
                        
                    </div>
                    
                    <div class="form-group col-sm-6">
                    
                        <label for="inputSobrenome">Sobrenome</label>
                        <input type="text" class="form-control" id="inputSobrenome" placeholder="Sobrenome">
                    
                    </div>
                    
                </div>
                
                <div class="form-row">
                    
                    <div class="form-group col-sm-12">
                    
                        <label for="inputEnd">Endereço</label>
                        <input type="text" class="form-control" id="inputEnd" placeholder="Endereço completo">
                    
                    </div>
                    
                </div>
                
                <div class="form-row">
                    
                    <div class="form-group col-sm-6">
                    
                        <label for="inputCidade">E-mail</label>
                        <input type="email" class="form-control" id="inputMail" placeholder="xxxxx@xx.com">
                    
                    </div>
                    
                    <div class="form-group col-sm-4">
                    
                        <label for="inputEst">Faculdade</label>
                        <select id="inputEst" class="form-control">
                            <option selected>Escolha...</option>
                            <option>...</option>
                            <option>...</option>
                            <option>...</option>
                        </select>
                    
                    </div>
                    
                    <div class="form-group col-sm-2">
                    
                        <label for="inputID">ID</label>
                        <input type="number" id="inputID" class="form-control">
                    
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
                
                <div class="form-row">
                
                    <div class="col-sm-12">
                        
                        <a tabindex="0" class="btn btn-secondary ml-2" role="button" data-toggle="popover" data-placement="right" data-trigger="focus" title="Maecenas felis massa" data-content="Cras porttitor tellus et erat ultricies, in congue mauris rhoncus.">Ajuda</a>
                    
                    </div>
                
                </div>
                
                <div class="form-row row justify-content-center">
                
                    <button type="submit" class="btn cor-vermelho text-light" data-dismiss="modal">Confirmar</button>
                    <button type="button" class="btn cor-vermelho text-light ml-3" data-dismiss="modal">Voltar</button>
                
                </div>
            
            
            
                </div>
            
            </form>
        </div>
  </body>

</html>