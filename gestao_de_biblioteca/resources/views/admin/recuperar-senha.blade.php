<?php include_once("includes/componetes.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Recuperar Senha|Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="../lib/datatables/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../lib/validate/jquery.validate.css">
  
  <!-- endinject -->
  <?php favicon(); ?>
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <a href="../index.php" class="text-danger link" style="text-decoration:none">
                        <b style="font-size:30px; font-family: 'Playfair Display', serif;">SGB</b> <sub>Sistema de Gestão da Biblioteca</sub>
                    </a>
              </div>
              <h4>Esqueceu a Senha?</h4>
              <h6 class="font-weight-light">Informe seu e-mail e aguarde o link para refazer sua senha.</h6>
              <form class="pt-3" id="formulario" method="POST">
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" id="mail" name="mail" placeholder="Email" required>
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Enviar</button>
                </div>
                <div class="mt-3">
                  <a class="auth-link" href="login.php"><i class="ti-arrow-left"></i> Voltar</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
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
    <script src="../lib/validate/jquery.validate.min.js"></script>
    <script src="../lib/validate/jquery.validate.pt-br.js"></script>
    <script src="js/script-admin.js"></script>
  <!-- endinject -->
</body>

</html>
