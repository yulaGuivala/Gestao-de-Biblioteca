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
      <link rel="stylesheet" href="lib/profile-image/style.css">
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
        <div class="col-md-8 mr-4">
            <h5>Meus Dados</h5>
        </div>
    </div>

    <div class="row justify-content-center">

            <form class="col-md-8" method="post" action="#" id="formulario">
            
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
                                <input class="file-upload d-none" type="file" accept="image/*"/>
                            </div>
                        
                    </div>
            
                
                <div class="form-row">
                    
                    <div class="form-group col-sm-6">
                
                        <label for="inputNome">Nome</label>
                        <input type="text" class="form-control" id="inputNome" name="nome" placeholder="Nome" max-lenght="30" value="Jose" required readonly>
                        
                    </div>
                    
                    <div class="form-group col-sm-6">
                    
                        <label for="inputSobrenome">Sobrenome</label>
                        <input type="text" class="form-control" id="inputSobrenome" name="sobrenome" value="Pedro" placeholder="Sobrenome" max-lenght="30" required readonly>
                    
                    </div>
                    
                </div>
                
                <div class="form-row">
                    
                    <div class="form-group col-sm-6">
                    
                        <label for="inputCidade">E-mail</label>
                        <input type="email" class="form-control" id="inputMail" name="email" value="pedro@gmail.com" placeholder="xxxxx@xx.com" required readonly>
                    
                    </div>
                    
                    <div class="form-group col-sm-6">
                    
                        <label for="inputEst">Faculdade</label>
                        <select id="inputEst" name="facul" class="form-control" required disabled>
                            <option value=""> Selecione...</option>
                            <option value="Faculdade de Políticas de Administração">Faculdade de Políticas de Administração</option>
                            <option value="Faculdade de Direito">Faculdade de Direito</option>
                            <option value="Faculdade de Ciências Agrárias">Faculdade de Ciências Agrárias</option>
                            <option value="Faculdade de Economia e Informática">Faculdade de Economia e Informática</option>
                        </select>
                    
                    </div>
                    
                    <div class="form-group col-sm-6">
                    
                        <label for="inputID">Nr. de Estudante</label>
                        <input type="number" id="inputID" name="numero" value="20192389" class="form-control" min="1" max="99999999" required readonly>
                    
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
                        <select id="distrito" class="form-control" name="distrito" required disabled>
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
                        <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro" max-lenght="100" required readonly>
                    
                    </div>
                    <div class="form-group col-sm-3">

                        <label for="rua">Rua</label>
                        <input type="text" class="form-control" id="rua" name="rua" placeholder="Rua" max-lenght="100" required readonly>
                    
                    </div>
                    <div class="form-group col-sm-3">

                        <label for="rua">Nr. da Casa</label>
                        <input type="number" class="form-control" id="rua" name="rua" placeholder="Nr. da Casa" min="1" max="1000" required readonly>
                    
                    </div>
                    
                </div>
                <div class="form-row">
                      
                    <div class="form-group col-sm-6">
                        <label for="senha">Senha</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" value="mascarao" minlength="4" maxlength="15" required readonly>
                            <span class="input-group-btn">
                                <button class="btn btn-sm btn-secondary" type="button" id="btn-senha"><i class="fa fa-eye"></i></button>
                            </span>
                        </div>
                        <label id="erro-senha" class="my-error-class"></label>
                    </div>
                      
                      <div class="form-group col-sm-6 d-none" id="divcs">
                        <label for="csenha">Confirmar Senha</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="csenha" name="csenha" placeholder="Senha" value="mascarao" equalTo="#senha" minlength="4" maxlength="15" required>
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
    <script src="lib/profile-image/script.js"></script>
  </body>

</html>