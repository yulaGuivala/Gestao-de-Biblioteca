<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="{{ asset('admin/vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/base/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('user/lib/datatables/dataTables.bootstrap4.min.css')}}">
    <link rel="shortcut icon" href="{{ asset('user/imgs/favicon.png')}}"/>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login|Admin</title>
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
</head>

<body>
    @yield('conteudo')
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{ asset('admin/vendors/base/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="{{ asset('admin/vendors/chart.js/Chart.min.js') }}"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{ asset('admin/js/off-canvas.js') }}"></script>
    <script src="{{ asset('admin/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('admin/js/template.js') }}"></script>
    <script src="{{ asset('admin/js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('admin/js/dashboard.js') }}"></script>
    <!-- End custom js for this page-->
    <script src="{{ asset('user/lib/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('user/lib/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('user/lib/datatables/datatable.pt-br.js') }}"></script>

</body>

</html>
