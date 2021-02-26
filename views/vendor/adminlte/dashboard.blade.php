@extends('admin::main')
@section('body')
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
@endsection
