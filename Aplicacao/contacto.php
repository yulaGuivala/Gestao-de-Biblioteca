<?php include_once("includes/componetes.php"); ?>
<!doctype html>
<html lang="pt-br">
 <head>
    <title>Inicio</title>
      
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
                    <p id="dir"><a href="index.php"><i class="fas fa-home mr-1"></i>Inicio</a> > <span
                            class="text-danger">Contacte-nos</span></p>
                    <hr class="bg-danger">
                </div>
            </div>
    
            <div class="row">   
                <div class="col-12">
                    <h1>Contacte-nos</h1>
                </div>
            </div>
    
        </div>
    </header>

    <!-- Acerca -->
    <div class="container">
        <div class="row mb-3 justify-content-center">
            <div class="col-sm-8 mr-4">
                <h5>Formulário de Contacto</h5>
            </div>
        </div>
        <div class="row mb-5 justify-content-center" id="row-altura">
            <div class="col-sm-8  cor-borda2 cor-creme" id="cadastro">
                <form action="model/contactoDAO.php" method="POST" class="px-2" id="formulario">
                    <div class="form-row mt-3 justify-content-center">
                        <div class="form-group col-sm-10 ">
                            <label for="Assunto" >Assunto:</label>
                            <input type="text" name="assunto" class="form-control"  placeholder="Assunto" required>
                        </div>
                        
                    </div> 
                    <div class="form-row justify-content-center">
                        <div class="form-group col-sm-10">
                            <label for="Email" >Email:</label>
                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="form-row justify-content-center">

                        <div class="form-group col-sm-10">
                            <label for="Messagem">Messagem:</label>
                            <textarea class="form-control" name="mensagem" id="Messagem" cols="70" rows="7" minlength="10" required></textarea>
                        </div>

                    </div>
        
                    <p class="row justify-content-center">
                        <button class="btn btn-danger botoes mr-3" type="reset">Apagar</button>
                        <button class="btn btn-primary botoes" name="submeter" type="submit">Enviar</button>
                    </p>
                    
                </form>
            </div>
        </div>
        
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