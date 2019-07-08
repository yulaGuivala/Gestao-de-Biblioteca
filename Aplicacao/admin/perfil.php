<?php include_once("includes/componetes.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Perfil|Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="../lib/validate/jquery.validate.css">
  
  <!-- endinject -->
  <?php favicon(); ?>
</head>

<body>
  <div class="container-scroller">
    
    <!-- Navbar: includes/componetes.php -->
    <?php navbar(); ?>
    
    <!-- page-body-wrapper (corpo) -->
    <div class="container-fluid page-body-wrapper">
       
      <!-- Sidebar: includes/componetes.php-->
      <?php sidebar(); ?>

      <!-- main-panel (conteudo)-->
      <div class="main-panel">
        
        <!-- content-wrapper  -->
        <div class="content-wrapper">
          
        <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <h4 class="font-weight-bold mb-0">Perfil</h4>
                </div>
                <div>
                    <button type="button" id="habilitar" class="btn btn-info btn-rounded ml-3">Habilitar Edição</button>
                </div>
              </div>
            </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="alert alert-warning alert-dismissable d-none" id="alerta-msg">    
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>    Modo edição activado!
            </div>
          </div>
        </div>
        
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Seus Dados de Perfil</h4>
                  <p class="card-description" id="p-msg">
                    Habilite a edição para alterar os seus dados.
                  </p>
                  
                  <form class="forms-sample" method="POST" id="formulario">
                    
                    <div class="form-row">
                      <div class="form-group col-sm-6">
                        <label for="nome">Primeiro Nome</label>
                        <input type="text" class="form-control" id="nome" placeholder="Primeiro nome" value="Shanks" readonly required>
                      </div>
                      <div class="form-group col-sm-6">
                        <label for="apelido">Sobrenome</label>
                        <input type="text" class="form-control" id="apelido" placeholder="Sobrenome" value="O Ruivo" readonly required>
                      </div>
                    </div>
                    
                    <div class="form-row">
                      <div class="form-group col-sm-6">
                        <label for="usuario">Nome de Usuário</label>
                        <input type="text" class="form-control" id="usuario" placeholder="Nome de usuário" value="shanks" readonly required minlength="3" maxlength="15">
                      </div>
                      <div class="form-group col-sm-6">
                        <label for="mail">Endereço de Email</label>
                        <input type="email" class="form-control" id="mail" placeholder="Email" value="ruivo@gmail.com" readonly required>
                      </div>
                    </div>
                    
                    <div class="form-row">
                      
                      <div class="form-group col-sm-6">
                        <label for="senha">Senha</label>
                        <div class="input-group">
                          <div class="input-group-append">
                            <button class="btn btn-sm btn-secondary" type="button" id="btn-senha"><i class="ti-eye"></i></button>
                          </div>
                          <input type="password" class="form-control" id="senha" placeholder="Senha" value="younkou" readonly required minlength="4" maxlength="15">
                          
                        </div>
                      </div>
                      
                      <div class="form-group col-sm-6 d-none" id="divcs">
                        <label for="csenha">Confirmar Senha</label>
                        <div class="input-group">
                          <div class="input-group-append">
                            <button class="btn btn-sm btn-secondary" type="button" id="btn-csenha"><i class="ti-eye"></i></button>
                          </div>
                          <input type="password" class="form-control" id="csenha" placeholder="Confirmar senha" value="younkou" readonly required equalTo="#senha" maxlength="15">
                          
                        </div>
                      </div>

                    </div>

                    <div class="form-row">
                      <div class="form-group col-sm-12">
                        <label>Foto de Perfil</label>
                        <input type="file" name="img[]" class="file-upload-default" accept="image/*">
                        <div class="input-group col-xs-12">
                          <input type="text"  class="form-control file-upload-info" disabled placeholder="Foto de perfil" value="foto.jpg" required>
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" id="btn-foto" type="button" disabled>Carregar</button>
                          </span>
                        </div>
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="form-group col-12">
                        <button type="submit" class="btn btn-primary mr-2 mt-2 d-none" id="confirmar2">Confirmar</button>
                        <a href="index.php" class="btn btn-danger mt-2 d-none" id="cancelar">Cancelar</a>
                      </div>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>

          
        </div>
        <!-- content-wrapper ends -->
        
        <!--footer: includes/componetes.php -->
        <?php footer(); ?>

      </div>
      <!-- main-panel ends -->

    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
   <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
 
  <!-- End custom js for this page-->
   <script src="js/file-upload.js"></script>
   <script src="../lib/validate/jquery.validate.min.js"></script>
    <script src="../lib/validate/jquery.validate.pt-br.js"></script>
   <script src="js/script-admin.js"></script>
</body>

</html>

