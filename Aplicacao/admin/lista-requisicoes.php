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
                                    <button type="button" class="btn btn-danger btn-icon-text btn-rounded">
                                        <i class="ti-trash btn-icon-prepend"></i>Apagar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-5 "> 
                        <div class="col-sm-12 border">
                                <div class="row justify-content-center bg-white">
                                    <div class="col-sm-12 borda-titulo border mb-2">
                                        <label><i class=""></i>Gerir Pedidos</label>
                                    </div>
                                    <!--lista do tipo -->
                                    <ul class="col-sm-11 nav nav-tabs ml-2 mb-3 bg-white" id="tipo" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active active1 texto-verde" id="" data-toggle="pill" href="#tipo1">Pendentes</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link texto-verde" id="" data-toggle="pill" href="#tipo2">Levantados</a>
                                        </li>
                                    
                                        </li>
                                    </ul>
                                </div>

                                <!--conteudo da lista tipo -->
                                <div class = "row justify-content-center bg-white">

                                    <div class="col-sm-11 tab-content" id="nav-pills-tipo">
                                        
                                        <div class="tab-pane fade show active" id="tipo1" role="tabpanel">
                                            <div class="">
                                                <table class="table table-bordered table-hover col-12 tabela mt-2" id="i1">
                                                    <thead>
                                                        <tr class="cor-creme">
                                                            <td class="titulo-tabela" colspan="5"><i class="fa fa-list mr-2"></i>Pendentes</td>
                                                        </tr>
                                                        <tr>
                                                        <th class="texto-verde text-center" style="width:4px;">
                                                            <input type="checkbox" onclick="selecionar()">
                                                        </th>
                                                        <th>Titulo</th>
                                                        <th>Autor</th>
                                                        <th>Editora</th>
                                                        <th>Faculdade</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <tbody id="tabela-corpo"> 
                                                    <?php
                                                        
                                                    ?>
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
                                                    </tr>
                                                
                                                </tbody>
                                                </table>   
                                            </div>
                                            
                                            
                                        </div>
                                
                                        <div class="tab-pane fade" id="tipo2" role="tabpanel">
                                            <div class="">
                                                <table class="table table-bordered table-hover col-12 tabela mt-2" id="i2">
                                                    <thead >
                                                        <tr class="cor-creme">
                                                            <td class="titulo-tabela" colspan="5"><i class="fa fa-list mr-2"></i>Publicados</td>
                                                            
                                                        </tr>
                                                        <tr>
                                                        <tr>
                                                        <th class="texto-verde text-center" style="width:2px;">
                                                            <input type="checkbox" onclick="selecionar()">
                                                        </th>
                                                        <th class="texto-verde">Benificiario</th>
                                                        <th class="texto-verde">Pedido</th>
                                                        <th class="texto-verde" >
                                                            <a href="">Acção</a>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <tbody id="tabela-corpo"> 
                                                    <?php
                                                    
                                                    ?> 
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
                                                    </tr>
                                                
                                                </tbody>
                                                </table>
                                            </div>
                                        </div>
                    
                                        <div class="tab-pane fade" id="tipo3" role="tabpanel">
                                            <div class="">
                                                <table class="table table-bordered table-hover col-12 tabela mt-2" id="i3">
                                                    <thead >
                                                        <tr class="cor-creme">
                                                            <td class="titulo-tabela" colspan="4"><i class="fa fa-list mr-2"></i>Associacoes</td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <th class="texto-verde text-center" style="width:2px;">
                                                                <input type="checkbox" onclick="selecionar()">
                                                            </th>
                                                            <th class="texto-verde">Nome</th>
                                                            <th class="texto-verde">Localizacao</th>
                                                            <th class="texto-verde">Tipo</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            //include_once("model/instituicaoDAO.php");
                                                            //instituicao(2);
                                                        ?>   
                                                    </tbody>
                                                </table>
                                            </div>
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
    
    <script> 
        $(document).ready( function () {
            $('#tabela-dados').DataTable();
        } );
    </script>

</body>

</html>