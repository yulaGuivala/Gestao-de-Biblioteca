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
        <?php cabecalho(); ?>
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
        <div class="col-md-6 mr-4">
            <h5>Formulário de Cadastro</h5>
        </div>
    </div>

    <div class="row justify-content-center">

            <form class="col-md-6" method="post" action="autenticacao.php" id="formulario">
            
                <div class="col-sm-12 border cor-creme cor-borda justify-content-center mb-10" id="geral">
            
                    <div class="form-row justify-content-center">
                        <div class="col-sm-10 mt-2 row justify-content-center">
                            <i class="fa fa-user-circle fa-4x" aria-hidden="true"></i>
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
                    
                    <div class="form-group col-sm-12">
                    
                        <label for="inputEnd">Endereço</label>
                        <input type="text" class="form-control" id="inputEnd" name="adress" placeholder="Endereço completo" max-lenght="30" required>
                    
                    </div>
                    
                </div>
                
                <div class="form-row">
                    
                    <div class="form-group col-sm-6">
                    
                        <label for="inputCidade">E-mail</label>
                        <input type="email" class="form-control" id="inputMail" name="email" placeholder="xxxxx@xx.com" required>
                    
                    </div>
                    
                    <div class="form-group col-sm-6">
                    
                        <label for="inputEst">Faculdade</label>
                        <select id="inputEst" name="facul" class="form-control">
                            <option selected>Escolha...</option>
                            <option>...</option>
                            <option>...</option>
                            <option>...</option>
                        </select>
                    
                    </div>
                    
                    <div class="form-group col-sm-4">
                    
                        <label for="inputID">Nr. de Estudante</label>
                        <input type="number" id="inputID" class="form-control" max-lenght="4" required>
                    
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
                        <button type="button" class="btn btn-danger text-light ml-3" data-dismiss="modal">Voltar</button>
</div>
                
                </div>
            
            
            
                </div>
            
            </form>
    </div>
    <!-- footer -->
    <?php rodape(); ?>

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
                                <table class="table table-bordered table-hover col-12 tabela mt-2" id="i2">
                                    <thead >
                                        <tr class="cor-creme">
                                            <td class="titulo-tabela" colspan="5"><i class="fa fa-list mr-2"></i>Lista de livros selecionados</td>
                                            
                                        </tr>
                                        <tr>
                                        <tr>
                                            <th class=" text-center" style="width:2px;">
                                                <input type="checkbox" onclick="selecionar()">
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
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary text-light">Comfirmar Requisição</button>
                    <button type="button" class="btn btn-danger text-light">Eliminar</button>
                </div>
                
            </div>
        </div>
    </div>

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