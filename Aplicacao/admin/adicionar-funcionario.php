<?php include_once("includes/componetes.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>RoyalUI Admin</title>
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
                  <h4 class="font-weight-bold mb-0">Funcionários</h4>
                </div>
                <div>
                    <a href="lista-funcionario.php" class="btn btn-light btn-icon-text btn-rounded">
                      <i class="ti-back-right btn-icon-prepend"></i>Voltar
                    </a>
                </div>
              </div>
            </div>
        </div>

          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Adicionar Novo Funcionário</h4>
                  <p class="card-description">
                    Introduza os dados do novo funcionário
                  </p>
                  
                  <form class="forms-sample" method="POST">
                    
                    <div class="form-row">
                      <div class="form-group col-sm-6">
                        <label for="nome">Primeiro Nome</label>
                        <input type="text" class="form-control" id="nome" placeholder="Primeiro nome">
                      </div>
                      <div class="form-group col-sm-6">
                        <label for="apelido">Sobrenome</label>
                        <input type="text" class="form-control" id="apelido" placeholder="Sobrenome">
                      </div>
                    </div>
                    
                    <div class="form-row">
                      <div class="form-group col-sm-6">
                        <label for="usuario">Nome de Usuário</label>
                        <input type="text" class="form-control" id="usuario" placeholder="Nome de usuário">
                      </div>
                      <div class="form-group col-sm-6">
                        <label for="mail">Endereço de Email</label>
                        <input type="email" class="form-control" id="mail" placeholder="Email">
                      </div>
                    </div>
                    
                    <div class="form-row">
                      <div class="form-group col-sm-6">
                        <label for="senha">Senha</label>
                        <input type="password" class="form-control" id="senha" placeholder="Senha">
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
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Foto de perfil">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Carregar</button>
                          </span>
                        </div>
                      </div>
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Confirmar</button>
                    <button type="reset" class="btn btn-light">Limpar</button>
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
</body>

</html>

