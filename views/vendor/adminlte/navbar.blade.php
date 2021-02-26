<nav class="main-header navbar navbar-expand navbar-dark">
  <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
  </ul>
  <ul class="navbar-nav ml-auto">
    <x-admin::nav-item-dropdown class="dropdown-menu-sm dropdown-menu-right">
        <i class="fas fa-user-cog mr-1"></i>
        <x-slot name="item">
            @include('pages.admin.profile.nav-navbar')
            <x-admin::dropdown-item-a :href="route('admin.login')">
                <i class="fas fa-sign-out-alt mr-2"></i> Sign Out
            </x-admin::dropdown-item-a>
        </x-slot>
    </x-admin::nav-item-dropdown>
  </ul>
</nav>