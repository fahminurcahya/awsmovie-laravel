<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Stream | @yield('title')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="{{ asset("adminlte/plugins/fontawesome-free/css/all.min.css") }}">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="{{ asset("adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css") }}">
  <link rel="stylesheet" href="{{ asset("adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css") }}">
  <link rel="stylesheet" href="{{ asset("adminlte/plugins/jqvmap/jqvmap.min.css") }}">
  <link rel="stylesheet" href="{{ asset("adminlte/dist/css/adminlte.min.css")}}">
  <link rel="stylesheet" href="{{ asset("adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css") }}">
  <link rel="stylesheet" href="{{ asset("adminlte/plugins/daterangepicker/daterangepicker.css") }}">
  
  <link rel="stylesheet" href="{{ asset("adminlte/plugins/summernote/summernote-bs4.min.css") }}">

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

 

  {{-- navbar here --}}
  @include('admin.layouts.navbar')
  {{-- sidebar here --}}
  @include('admin.layouts.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">@yield('title')</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        @yield('content')
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  {{-- footer here --}}
  @include('admin.layouts.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->




 <!-- jQuery -->
 <script src="{{ asset("adminlte/plugins/jquery/jquery.min.js") }}"></script>
 <script src="{{ asset("adminlte/plugins/jquery-ui/jquery-ui.min.js") }}"></script>
 <script>
   $.widget.bridge('uibutton', $.ui.button)
 </script>
 <script src="{{ asset("adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
 <script src="{{ asset("adminlte/plugins/chart.js/Chart.min.js") }}"></script>
 <script src="{{ asset("adminlte/plugins/sparklines/sparkline.js") }}"></script>
 <script src="{{ asset("adminlte/plugins/jqvmap/jquery.vmap.min.js") }}"></script>
 <script src="{{ asset("adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js") }}"></script>
 <script src="{{ asset("adminlte/plugins/jquery-knob/jquery.knob.min.js") }}"></script>
 <script src="{{ asset("adminlte/plugins/moment/moment.min.js") }}"></script>
 <script src="{{ asset("adminlte/plugins/daterangepicker/daterangepicker.js") }}"></script>
 <script src="{{ asset("adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js") }}"></script>
 <script src="{{ asset("adminlte/plugins/summernote/summernote-bs4.min.js") }}"></script>
 <script src="{{ asset("adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js") }}"></script>
 <script src="{{ asset("adminlte/dist/js/adminlte.js") }}"></script>

@yield('js')

</body>
</html>