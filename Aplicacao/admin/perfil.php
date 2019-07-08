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
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Seus Dados de Perfil</h4>
                  <p class="card-description">
                    Habilite a edição para para alterar os seu dados.
                  </p>
                  
                  <form class="forms-sample" method="POST">
                    
                    <div class="form-row">
                      <div class="form-group col-sm-6">
                        <label for="nome">Primeiro Nome</label>
                        <input type="text" class="form-control" id="nome" placeholder="Primeiro nome" value="Shanks" readonly>
                      </div>
                      <div class="form-group col-sm-6">
                        <label for="apelido">Sobrenome</label>
                        <input type="text" class="form-control" id="apelido" placeholder="Sobrenome" value="O Ruivo" readonly>
                      </div>
                    </div>
                    
                    <div class="form-row">
                      <div class="form-group col-sm-6">
                        <label for="usuario">Nome de Usuário</label>
                        <input type="text" class="form-control" id="usuario" placeholder="Nome de usuário" value="shanks" readonly>
                      </div>
                      <div class="form-group col-sm-6">
                        <label for="mail">Endereço de Email</label>
                        <input type="email" class="form-control" id="mail" placeholder="Email" value="ruivo@gmail.com" readonly>
                      </div>
                    </div>
                    
                    <div class="form-row">
                      <div class="form-group col-sm-6">
                        <label for="senha">Senha</label>
                        <input type="password" class="form-control" id="senha" placeholder="Senha" value="younkou" readonly>
                      </div>
                      <div class="form-group col-sm-6">
                        <label for="confirmar">Confirmar Senha</label>
                        <input type="password" class="form-control" id="confirmar" placeholder="confirmar senha">
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="form-group col-sm-12">
                        <label>Foto de Perfil</label>
                        <input type="file" name="img[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Foto de perfil" value="foto.jpg">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button" disabled>Carregar</button>
                          </span>
                        </div>
                      </div>
                    </div>

                    <button type="submit" class="btn btn-primary mr-2 d-none" id="confirmar2">Confirmar</button>
                    <a href="index.php" class="btn btn-danger d-none" id="cancelar">Cancelar</a>
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
  <!-- Plugin js for this page-->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->
   <script src="js/file-upload.js"></script>
   <script src="js/script-admin.js"></script>
</body>

</html>

