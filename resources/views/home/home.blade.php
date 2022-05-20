<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>C.R Shop Managerr</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href={{asset('plugins/fontawesome-free/css/all.min.css')}}>
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href={{asset('puglins/overlayScrollbars/css/OverlayScrollbars.min.css')}}>
  <!-- Theme style -->
  <link rel="stylesheet" type="text/css" href={{asset('dist/css/adminlte.min.css')}}>
</head>
<body class="hold-transition light-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a style="text-transform:uppercase; font-weight:bold;" href="#" class="nav-link">Admin</a>
      </li>
    </ul>

    <!-- Fullscreen -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('home') }}" class="brand-link">
      <img src="storage/img.png" alt="C.R Shop Manager Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">C.R Shop Manager</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- SidebarSearch Form -->
      <div class="form-inline" style="margin-top: 5px;">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Buscar" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <li class="nav-item">
            <a href="{{ url('pessoa') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Cadastrar Pessoa
              </p>
            </a>
          </li>
      <!-- /.sidebar-menu -->
    </div>

    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        @yield('conteudo')

      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src={{asset('plugins/jquery/jquery.min.js')}}></script>
<!-- Bootstrap -->
<script src={{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}></script>
<!-- AdminLTE App -->
<script src={{asset('dist/js/adminlte.js')}}></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src={{asset('plugins/jquery-mousewheel/jquery.mousewheel.js')}}></script>
<script src={{asset('plugins/raphael/raphael.min.js')}}></script>
<script src={{asset('plugins/jquery-mapael/jquery.mapael.min.js')}}></script>
<script src={{asset('plugins/jquery-mapael/maps/usa_states.min.js')}}></script>

</body>
</html>