<?php include_once("includes/componetes.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Requisições|Admin</title>
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
                                    <h4 class="font-weight-bold mb-0">Requisições</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Gerir Requisições</h4><hr>
                                
                                    <ul class="col-sm-11 nav nav-tabs ml-2 mb-3 bg-white" id="tipo" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active active1 texto-verde" id="" data-toggle="pill" href="#tipo1">Pendentes</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link texto-verde" id="" data-toggle="pill" href="#tipo2">Levantados</a>
                                        </li>
                                    </ul>

                                    <div class = "row justify-content-center bg-white">

                                    <div class="col-sm-11 tab-content" id="nav-pills-tipo">
                                        
                                        <div class="tab-pane fade show active" id="tipo1" role="tabpanel">
                                            <div class="table-responsive pb-0">
                                                <table class="table table-hover col-12 mt-2" id="tb1">
                                                    <thead>
                                                        <tr>
                                                            <th>Nr. de Estudante</th>
                                                            <th>Nome</th>
                                                            <th>Titulo do Livro</th>
                                                            <th>Acção</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="tabela-corpo1"> 
                                                    <tr>
                                                        <td>20161865</td>
                                                        <td>Folege Ricardo</td>
                                                        <td>Analise matetica, B. Demidovitch</td>
                                                        <td>
                                                            <input type="button" class="btn btn-rounded btn-outline-primary" id="conf" value="Confirmar">
                                                            <input type="button" class="btn btn-rounded btn-outline-danger" id="canc" value="Cancelar">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>20161865</td>
                                                        <td>Folege Ricardo</td>
                                                        <td>Analise matetica, B. Demidovitch</td>
                                                        <td>
                                                            <input type="button" class="btn btn-rounded btn-outline-primary" id="conf" value="Confirmar">
                                                            <input type="button" class="btn btn-rounded btn-outline-danger" id="canc" value="Cancelar">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>20161865</td>
                                                        <td>Folege Ricardo</td>
                                                        <td>Analise matetica, B. Demidovitch</td>
                                                        <td>
                                                            <input type="button" class="btn btn-rounded btn-outline-primary" id="conf" value="Confirmar">
                                                            <input type="button" class="btn btn-rounded btn-outline-danger" id="canc" value="Cancelar">
                                                        </td>
                                                    </tr>
                                                    
                                                    </tbody>
                                                </table>   
                                            </div>    
                                        </div>
                                
                                        <div class="tab-pane fade" id="tipo2" role="tabpanel">
                                            <div class="table-responsive pb-0">
                                                <table class="table table-hover col-12 mt-2" id="tb2">
                                                    <thead>
                                                        <tr>
                                                        <th>Nr. de Estudante</th>
                                                        <th>Nome</th>
                                                        <th>Titulo do Livro</th>
                                                        <th>Data</th>
                                                        <th>Acção</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="tabela-corpo2"> 
                                                <tr>
                                                    <td>20161865</td>
                                                    <td>Folege Ricardo</td>
                                                    <td>Analise matetica, B. Demidovitch</td>
                                                    <td>02/03/2019</td>
                                                    <td>
                                                        <input type="button" class="btn btn-rounded btn-outline-success" id="dev" value="Devolver">
                                                        
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>20161865</td>
                                                    <td>Folege Ricardo</td>
                                                    <td>Analise matetica, B. Demidovitch</i></td>
                                                     <td>02/03/2019</td>
                                                    <td>
                                                        <input type="button" class="btn btn-rounded btn-outline-success" id="dev" value="Devolver">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>20161865</td>
                                                    <td>Folege Ricardo</td>
                                                    <td>Analise matetica, B. Demidovitch</i></td>
                                                     <td>02/03/2019</td>
                                                    <td>
                                                        <input type="button" class="btn btn-rounded btn-outline-success" id="dev" value="Devolver">
                                                    </td>
                                                </tr>
                                                
                                                </tbody>
                                                </table>   
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                               <div>
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
        dataTablePt('#tb1');
        dataTablePt('#tb2');
    </script>

</body>

</html>