<!DOCTYPE html> <html lang="en">

<head> <meta charset="utf-8"> <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Enforcement and Monitoring System</title> <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../../AdminLTE-3.2.0/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"> 
  <!-- iCheck -->
  <!-- Select2 -->
  <link rel="stylesheet" href="../../AdminLTE-3.2.0/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="../../AdminLTE-3.2.0/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <link rel="stylesheet" href="../../AdminLTE-3.2.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css"> 
  <!-- Theme style --> 
  <link rel="stylesheet" href="../../AdminLTE-3.2.0/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../AdminLTE-3.2.0/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../AdminLTE-3.2.0/plugins/daterangepicker/daterangepicker.css"> 
  <!-- summernote -->
  <link rel="stylesheet" href="../../AdminLTE-3.2.0/plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="../../AdminLTE-3.2.0/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  
  </head>

  <!-- locked right click: oncontextmenu="return false;" -->

  <body class="hold-transition sidebar-mini sidebar-collapse">
    <div class="wrapper">
      <!-- Preloader -->
      <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="../../AdminLTE-3.2.0/dist/img/denr-emb-logo.gif" alt="AdminLTELogo" height="60" width="60">
      </div>

      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
          <!-- <li class="nav-item d-none d-sm-inline-block">
            <a href="index3.html" class="nav-link">Home</a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
          </li> -->
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
          <!-- Notifications Dropdown Menu -->
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
              <img class="direct-chat-img" src="../../AdminLTE-3.2.0/dist/img/denr-emb-logo.gif" alt="message user image">
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <a class="dropdown-item dropdown-header" href="#">{{auth()->user()->name}}</a>
              <div class="dropdown-divider"></div>
              <a href="{{ route('signout') }}" class="dropdown-item">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
          <!-- Brand Logo -->
          <a href="index3.html" class="brand-link">
            <img src="../../AdminLTE-3.2.0/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
              class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">EMEIS</span>
          </a>

          <!-- Sidebar -->
          <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                <img src="../../AdminLTE-3.2.0/dist/img/denr-emb-logo.gif" class="img-circle elevation-2"
                  alt="User Image">
              </div>
              <div class="info">
                <a href="#" class="d-block">{{auth()->user()->name}}</a>
              </div>
            </div>

            <!-- SidebarSearch Form -->
            <div class="form-inline">
              <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-sidebar">
                    <i class="fas fa-search fa-fw"></i>
                  </button>
                </div>
              </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                
                <!-- <li class="nav-item">
                  <a href="{{ url('company-registry') }}" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                      Home
                      <span class="right badge badge-danger">New</span>
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('report-list') }}" class="nav-link">
                    <i class="nav-icon fas fa-edit"></i>
                    <p>
                      Report
                      <span class="right badge badge-danger">New</span>
                    </p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="{{ url('nov-list') }}" class="nav-link">
                    <i class="nav-icon fas fa-edit"></i>
                    
                    <p>
                      NOV
                      <span class="right badge badge-danger">New</span>
                    </p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="{{ url('bookmark') }}" class="nav-link">
                    <i class="nav-icon fas fa-bookmark"></i>
                    <p>
                      Saved
                      <span class="right badge badge-danger">New</span>
                    </p>
                  </a>
                </li> -->
              </ul>
            </nav>
            <!-- /.sidebar-menu -->
          </div>
          <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="background-color: white;">
          <!-- Content Header (Page header) -->
          @yield('header')
          <!-- /.content-header -->

          <!-- Main content -->
          <section class="content">
            @yield('content')
          </section>
          <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <!-- <footer class="main-footer">
              <strong>Copyright &copy; 2023 <a href="https://adminlte.io">EMB MIS</a>.</strong>
              All rights reserved.
              <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
              </div>
            </footer> -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
          <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
      </div>
      <!-- ./wrapper -->

      <!-- jQuery -->
      <script src="../../AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
      <!-- jQuery UI 1.11.4 -->
      <script src="../../AdminLTE-3.2.0/plugins/jquery-ui/jquery-ui.min.js"></script>
      <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->


      <script src="../../AdminLTE-3.2.0/plugins/select2/js/select2.full.min.js"></script>
      <script>
        $.widget.bridge('uibutton', $.ui.button)
      </script>
      <!-- Bootstrap 4 -->
      <script src="../../AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- ChartJS -->
      <script src="../../AdminLTE-3.2.0/plugins/chart.js/Chart.min.js"></script>
      <!-- Sparkline -->
      <script src="../../AdminLTE-3.2.0/plugins/sparklines/sparkline.js"></script>
      <!-- jQuery Knob Chart -->
      <script src="../../AdminLTE-3.2.0/plugins/jquery-knob/jquery.knob.min.js"></script>
      <!-- daterangepicker -->
      <script src="../../AdminLTE-3.2.0/plugins/moment/moment.min.js"></script>
      <script src="../../AdminLTE-3.2.0/plugins/daterangepicker/daterangepicker.js"></script>
      <!-- Tempusdominus Bootstrap 4 -->
      <script src="../../AdminLTE-3.2.0/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
      <!-- Summernote -->
      <script src="../../AdminLTE-3.2.0/plugins/summernote/summernote-bs4.min.js"></script>
      <!-- overlayScrollbars -->
      <script src="../../AdminLTE-3.2.0/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
      <!-- AdminLTE App -->
      <script src="../../AdminLTE-3.2.0/dist/js/adminlte.js"></script>
      <!-- AdminLTE for demo purposes -->
      <!-- <script src="../../AdminLTE-3.2.0/dist/js/demo.js"></script> -->
      <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
      <!-- <script src="../../AdminLTE-3.2.0/dist/js/pages/dashboard.js"></script> -->

      <script src="../../AdminLTE-3.2.0/plugins/datatables/jquery.dataTables.min.js"></script>
      <script src="../../AdminLTE-3.2.0/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
      <script src="../../AdminLTE-3.2.0/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
      <script src="../../AdminLTE-3.2.0/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
      <script src="../../AdminLTE-3.2.0/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
      <script src="../../AdminLTE-3.2.0/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
      <script src="../../AdminLTE-3.2.0/plugins/jszip/jszip.min.js"></script>
      <script src="../../AdminLTE-3.2.0/plugins/pdfmake/pdfmake.min.js"></script>
      <script src="../../AdminLTE-3.2.0/plugins/pdfmake/vfs_fonts.js"></script>
      <script src="../../AdminLTE-3.2.0/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
      <script src="../../AdminLTE-3.2.0/plugins/datatables-buttons/js/buttons.print.min.js"></script>
      <script src="../../AdminLTE-3.2.0/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

      <script src="../../AdminLTE-3.2.0/plugins/sweetalert2/sweetalert2.min.js"></script>

      <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
      <script src="https://kit.fontawesome.com/0e706b6aa8.js" crossorigin="anonymous"></script>
    </body>

    </html>