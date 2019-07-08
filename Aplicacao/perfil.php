<?php include_once("includes/componetes.php"); ?>
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
      
     <link rel="stylesheet" href="lib/fontawesome/css/all.css">
    <?php favicon(); ?>

    
  </head>

  <body>
        <header class="container-fluid navbar-expand-md mb-5">
        <?php cabecalhoAutenticado(); ?>
        <div class="container">
    
            <div class="row mt-3">
                <div class="col-sm-12">
                    <p id="dir"><a href="index.php"><i class="fas fa-home mr-1"></i>Inicio</a> > Minha Conta > <span
                            class="text-danger">Perfil</span></p>
                    <hr class="bg-danger">
                </div>
            </div>
    
            <div class="row">   
                <div class="col-12">
                    <h1>Perfil</h1>
                </div>
            </div>
    
        </div>
    </header>
    <div class="row mb-3 justify-content-center">
        <div class="col-md-6 mr-4">
            <h5>Meus Dados</h5>
        </div>
    </div>

    <div class="row justify-content-center">

            <form class="col-md-6" method="post" action="#" id="formulario">
            
                <div class="col-sm-12 border cor-creme cor-borda justify-content-center mb-10" id="geral">
            
                    <div class="form-row justify-content-center mb-2">
                        <div class="col-sm-10 mt-2 row justify-content-center">
                            <i class="fa fa-user-circle fa-4x" aria-hidden="true"></i>
                        </div>
                    </div>
            
                
                <div class="form-row">
                    
                    <div class="form-group col-sm-6">
                
                        <label for="inputNome">Nome</label>
                        <input type="text" class="form-control" id="inputNome" name="nome" placeholder="Nome" max-lenght="30" value="Jose" readonly>
                        
                    </div>
                    
                    <div class="form-group col-sm-6">
                    
                        <label for="inputSobrenome">Sobrenome</label>
                        <input type="text" class="form-control" id="inputSobrenome" name="sobrenome" value="Pedro" placeholder="Sobrenome" readonly>
                    
                    </div>
                    
                </div>
                
                <div class="form-row">
                    
                    <div class="form-group col-sm-12">
                    
                        <label for="inputEnd">Endereço</label>
                        <input type="text" class="form-control" id="inputEnd" name="endereco" value="Kamaxaquene, Maxaquene A, n. 22" placeholder="Endereço completo" readonly>
                    
                    </div>
                    
                </div>
                
                <div class="form-row">
                    
                    <div class="form-group col-sm-6">
                    
                        <label for="inputCidade">E-mail</label>
                        <input type="email" class="form-control" id="inputMail" name="email" value="pedro@gmail.com" placeholder="xxxxx@xx.com" readonly>
                    
                    </div>
                    
                    <div class="form-group col-sm-6">
                    
                        <label for="inputEst">Faculdade</label>
                        <select id="inputEst" class="form-control" disabled>
                            <option selected>Faculdade de Políticas de Administração</option>
                            <option>Faculdade de Direito</option>
                            <option>Faculdade de Ciências Agrárias</option>
                            <option>Faculdade de Economia e Informática</option>
                        </select>
                    
                    </div>
                    
                    <div class="form-group col-sm-4">
                    
                        <label for="inputID">Nr. de Estudante</label>
                        <input type="number" id="inputID" name="numero" value="20192389" class="form-control" readonly>
                    
                    </div>
                
                </div>
                
                <div class="form-row">
                
                    <div class="form-group col-sm-12">
                    
                        <div class="form-check">
                        
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" checked> Desejo receber novidades por e-mail
                            </label>
                        
                        </div>
                    
                    </div>
                
                </div>
                
                <div class="form-row justify-content-center">
                    <div class="form-group col-12 text-center">
                        <button type="submit" class="btn btn-primary text-light d-none" id="confirmar">Confirmar</button>
                        <a href="index.php" class="btn btn-danger text-light d-none" id="cancelar">Cancelar</a>
                        <button type="button" id="habilitar" class="btn btn-info text-light ml-3">Habilitar Edição</button>
                    </div>
                </div>
            
            
            
                </div>
            
            </form>
    </div>
    <!-- footer -->
    <?php rodape(); ?>

    <!-- Modal caixa de livros-->
    <?php modalLivros(); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script src="lib/validate/jquery.validate.min.js"></script>
    <script src="lib/validate/jquery.validate.pt-br.js"></script>
    <script src="js/script.js"></script>
  </body>

</html>