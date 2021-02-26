<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ isset($title) ? $title.' | AdminLTE 3' : 'AdminLTE 3' }}</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ url('adminlte') }}/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ url('adminlte') }}/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  @stack('style')
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  @include('admin::navbar')
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
  @include('admin::sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   @yield('content')
  </div>
  <!-- /.content-wrapper -->
  @include('admin::footer')
</div>
<!-- ./wrapper -->
<!-- jQuery -->
<script src="{{ url('adminlte') }}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ url('adminlte') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ url('adminlte') }}/dist/js/adminlte.min.js"></script>
@stack('script')
</body>
</html>