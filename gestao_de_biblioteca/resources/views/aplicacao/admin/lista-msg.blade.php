<?php include_once("includes/componetes.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Mensagens|Admin</title>
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
                                    <h4 class="font-weight-bold mb-0">Mensagens</h4>
                                </div>
                                <div>
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
                                <h4 class="card-title mb-4">Mensagens Recebidas</h4>
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
                                        <th>Assunto</th>
                                        <th>Remetente</th>
                                        <th>Data - hora</th>
                                        <th>Acção</th>
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
                                        <td>Duvida bbbb</td>
                                        <td> jacob@gmail.com</td>
                                        <td>13/07/2019 - 12:25</td>
                                        <td>
                                            <button data-toggle="modal" data-target="#mensagen" class="btn btn-rounded btn-info"><i class="ti-eye"></i>     Ler</button>
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
                                        <td>Duvida bbbb</td>
                                        <td> jacob@gmail.com</td>
                                        <td>13/07/2019 - 12:25</td>
                                        <td>
                                            <button data-toggle="modal" data-target="#mensagen" class="btn btn-rounded btn-info"><i class="ti-eye"></i>     Ler</button>
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
                                        <td>Duvida bbbb</td>
                                        <td> jacob@gmail.com</td>
                                        <td>13/07/2019 - 12:25</td>
                                        <td>
                                            <button data-toggle="modal" data-target="#mensagen" class="btn btn-rounded btn-info"><i class="ti-eye"></i>     Ler</button>
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

    <!-- Modal Detalhes-->
    <div class="modal fade" id="mensagen" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
            
                <div class="modal-header">
                    <h5 class="modal-title">Assunto: onidienoin dendoindeindoen </h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    
                    <div class="container-fluid">
                    
                        <div class="row">
                        
                            <div class="col-12">
                                
                                <p class="text-secondary">Email do Remetente: <span class="text-primary">Jacob@ddqdqdwd.com</span></p>

                                 <p class="text-secondary">Recebida: 03/06/2019 - 12:45</p>  

                                <p>Donec semper maximus ipsum in feugiat. 
                                   Sed blandit, magna nec maximus venenatis, 
                                   nunc odio porttitor tellus, ac pulvinar mi 
                                   velit vel erat. Vestibulum ante ipsum 
                                   primis in faucibus orci luctus et ultrices 
                                   posuere cubilia Curae; Mauris sapien tellus, 
                                   mattis nec tempus id, consequat non tortor. 
                                   Nunc molestie orci purus, quis malesuada enim 
                                   ullamcorper condimentum. Nullam vitae ultrices 
                                   tortor. Pellentesque at felis eget nulla 
                                   condimentum euismod. Nulla tortor nulla, 
                                   suscipit at consectetur in, imperdiet eu tellus.
                                   Ut semper lorem orci, a malesuada ligula molestie 
                                   non. Morbi lobortis erat eget ipsum iaculis, at 
                                   sagittis est laoreet. Suspendisse pulvinar enim 
                                   eu nunc cursus pharetra. Nam porttitor porttitor 
                                   imperdiet. Duis gravida diam ultrices finibus 
                                   interdum. Vestibulum at elementum eros. Proin in 
                                   enim non lorem bibendum consectetur at vitae enim.
                                    Nam vel dolor ac velit pharetra pharetra.</p>

                                
                            </div>
                        
                        </div>
                    
                    </div>
                    
                </div>
                
                <div class="modal-footer">
                    <a href="#" class="btn btn-primary">Enviar email</a>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Voltar</button>
                </div>
                
            </div>
        </div>
    </div>

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