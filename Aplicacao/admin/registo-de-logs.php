<?php include_once("includes/componetes.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Registo de actividades</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../lib/datatables/dataTables.bootstrap4.min.css">

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
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                <h4 class="card-title mb-4">Registros de logs</h4>
                                <p class="card-description">
                                    Nome do Funcionário: <b class="text-danger">Jacob Pediton</b>
                                </p>
                                <div class="table-responsive ">
                                    <table class="table table-hover " id="tabela-dados">
                                    <thead>
                                        <tr>
                                         <th>Data</th>
                                        <th>Inicio de Secção</th>
                                        <th>Termino de  Secção</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <td>12/08/2019</td>
                                        <td>17:03</td>
                                        <td> 18:45</i></td>
                                        </tr>
                                        <tr>
                                        <td>12/08/2019</td>
                                        <td>17:03</td>
                                        <td> 18:45</i></td>
                                        </tr>
                                        <tr>
                                         <td>12/08/2019</td>
                                        <td>17:03</td>
                                        <td> 18:45</i></td>
                                        </tr>
                                        <tr>
                                        <td>12/08/2019</td>
                                        <td>17:03</td>
                                        <td> 18:45</i></td>
                                        </tr>
                                        <tr>
                                        <td>12/08/2019</td>
                                        <td>17:03</td>
                                        <td> 18:45</i></td>
                                        </tr>
                                    </tbody>
                                    </table>
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
    <script src="../lib/datatables/jquery.dataTables.min.js"></script>
    <script src="../lib/datatables/dataTables.bootstrap4.min.js"></script>
    
    <script> 
        $(document).ready( function () {
            $('#tabela-dados').DataTable();
        } );
    </script>

</body>

</html>