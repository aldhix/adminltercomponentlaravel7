<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  @include('admin::sidebar.brand')
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user (optional) -->
    @include('admin::sidebar.user')
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        @include('pages.admin.dashboard.nav-sidebar')
        @include('pages.admin.form.nav-sidebar')
        @include('pages.admin.user.nav-sidebar')
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>