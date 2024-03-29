<?php include_once("includes/componetes.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Lista de Funcionários|Admin</title>
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
                                    <a href="adicionar-funcionario.php" class="btn btn-primary btn-icon-text btn-rounded">
                                        <i class="ti-plus btn-icon-prepend"></i>Adicionar
                                    </a>
                                    <button type="button" class="btn btn-danger btn-icon-text btn-rounded">
                                        <i class="ti-trash btn-icon-prepend"></i>Apagar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                <h4 class="card-title mb-4">lista de funcionários</h4>
                                <div class="table-responsive pb-0">
                                    <table class="table table-hover " id="tabela-dados">
                                    <thead>
                                        <tr>
                                        <th>
                                            <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" id="selecionar">                                           </label>
                                            </div>
                                        </th>
                                        <th>Nome</th>
                                        <th>Telefone</th>
                                        <th>Email</th>
                                        <th>Nome de Usuário</th>
                                        <th>Registros de logs</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <td>
                                            <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input">
                                            </label>
                                            </div>
                                        </td>
                                        <td>Jacob Pediton</td>
                                        <td>847523618</td>
                                        <td> jacob@gmail.com</i></td>
                                        <td>jacob</td>
                                        <td>
                                            <a href="registo-de-logs.php" class="btn btn-rounded btn-info"><i class="ti-eye"></i> Ver</a>
                                        </td>
                                        </tr>
                                        <tr>
                                        <td>
                                            <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input">
                                            </label>
                                            </div>
                                        </td>
                                        <td>Jacob Pediton</td>
                                        <td>847523618</td>
                                        <td> jacob@gmail.com</i></td>
                                        <td><label>jacob</label></td>
                                        <td>
                                            <a href="registo-de-logs.php" class="btn btn-rounded btn-info"><i class="ti-eye"></i> Ver</a>
                                        </td>
                                        </tr>
                                        <tr>
                                        <td>
                                            <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input">
                                            </label>
                                            </div>
                                        </td>
                                        <td>Jacob Pediton</td>
                                        <td>847523618</td>
                                        <td> jacob@gmail.com</i></td>
                                        <td><label>jacob</label></td>
                                        <td>
                                            <a href="registo-de-logs.php" class="btn btn-rounded btn-info"><i class="ti-eye"></i> Ver</a>
                                        </td>
                                        </tr>
                                        <tr>
                                        <td>
                                            <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input">
                                            </label>
                                            </div>
                                        </td>
                                        <td>Jacob Pediton</td>
                                        <td>847523618</td>
                                        <td> jacob@gmail.com</i></td>
                                        <td><label>jacob</label></td>
                                        <td>
                                            <a href="registo-de-logs.php" class="btn btn-rounded btn-info"><i class="ti-eye"></i> Ver</a>
                                        </td>
                                        </tr>
                                        <tr>
                                        <td>
                                            <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input">
                                            </label>
                                            </div>
                                        </td>
                                        <td>Edna Mendes</td>
                                        <td>847523618</td>
                                        <td> jacob@gmail.com</i></td>
                                        <td><label>jacob</label></td>
                                        <td>
                                            <a href="registo-de-logs.php" class="btn btn-rounded btn-info"><i class="ti-eye"></i> Ver</a>
                                        </td>
                                        </tr>
                                    </tbody>
                                    </table>
                                </div>
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
      <!-- End custom js for this page-->
    <script src="../lib/datatables/jquery.dataTables.min.js"></script>
    <script src="../lib/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="../lib/datatables/datatable.pt-br.js"></script>
    
    <script>
        //cria datatable em pt
        dataTablePt('#tabela-dados');


        //seleciona todos checkboxes da tabela 
        $("#selecionar").click(function () {
            $('input:checkbox').prop('checked', this.checked);
        });
    </script>

</body>

</html>