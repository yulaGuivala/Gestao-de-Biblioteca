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
                                    <h4 class="font-weight-bold mb-0">Livros</h4>
                                </div>
                                <div>
                                    <a href="adicionar-livro.php" class="btn btn-primary btn-icon-text btn-rounded">
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
                                <h4 class="card-title mb-4">lista de livros</h4>
                                <div class="table-responsive ">
                                    <table class="table table-hover " id="tabela-dados">
                                    <thead>
                                        <tr>
                                        <th>
                                            <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label">
                                                <input type="checkbox" id="selecionar" class="form-check-input">                                           </label>
                                            </div>
                                        </th>
                                        <th>Titulo</th>
                                        <th>Autor</th>
                                        <th>Editora</th>
                                        <th>Faculdade</th>
                                        <th>Ação</th>
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
                                        <td>Artes da Vida Segundo Folege</td>
                                        <td>Folege</td>
                                        <td>Egelof Solutions</td>
                                        <td>Faculdade de Engenharia</td>
                                        <td>
                                            <a href="#" class="btn btn-outline-success btn-icon-text btn-rounded">
                                                <i class="ti-pencil btn-icon-prepend"></i>Editar
                                            </a>
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
                                        <td>Artes da Vida Segundo Folege</td>
                                        <td>Folege</td>
                                        <td>Egelof Solutions</i></td>
                                        <td><label>Faculdade de Engenharia</label></td>
                                        <td>
                                            <a href="#" class="btn btn-outline-success btn-icon-text btn-rounded">
                                                <i class="ti-pencil btn-icon-prepend"></i>Editar
                                            </a>
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
                                        <td>Artes da Vida Segundo Folege</td>
                                        <td>Folege</td>
                                        <td>Egelof Solutions</i></td>
                                        <td><label>Faculdade de Engenharia</label></td>
                                        <td>
                                            <a href="#" class="btn btn-outline-success btn-icon-text btn-rounded">
                                                <i class="ti-pencil btn-icon-prepend"></i>Editar
                                            </a>
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
                                        <td>Artes da Vida Segundo Folege</td>
                                        <td>Folege</td>
                                        <td>Egelof Solutions</i></td>
                                        <td><label>Faculdade de Engenharia</label></td>
                                        <td>
                                            <a href="#" class="btn btn-outline-success btn-icon-text btn-rounded">
                                                <i class="ti-pencil btn-icon-prepend"></i>Editar
                                            </a>
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
                                        <td>Artes da Vida Segundo Folege</td>
                                        <td>Folege</td>
                                        <td>Egelof Solutions</i></td>
                                        <td><label>Faculdade de Engenharia</label></td>
                                        <td>
                                            <a href="#" class="btn btn-outline-success btn-icon-text btn-rounded">
                                                <i class="ti-pencil btn-icon-prepend"></i>Editar
                                            </a>
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