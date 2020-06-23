       <!-- Main Sidebar Container -->
       <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
          <img src="{{asset('public/backend/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
          <span class="brand-text font-weight-light">PORTFOLIO</span>
      </a>

      <?php 
      $user= Auth::user();
       ?>
      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="{{ url('public/backend/images/profile/'.$user->user_avatar) }}" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
              <a href="#" class="d-block">{{$user->fullname}}</a>
          </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
             <li class="nav-item has-treeview menu-open">
                <a href="{{route('admin.index')}}" class="nav-link {{ (\Request::route()->getName() == 'admin.index') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                </p>
            </a>
              </li>
<li class="nav-item">
    <a href="{{route('admin.users.edit')}}" class="nav-link {{ (\Request::route()->getName() == 'admin.users.edit') ? 'active' : '' }}">
      <i class="nav-icon fas fa-user"></i>
      <p>
        Profile
     <!--    <span class="right badge badge-danger">New</span> -->
    </p>
</a>
</li>
<li class="nav-item has-treeview">
    <a href="#" class="nav-link">
      <i class="nav-icon fas fa-copy"></i>
      <p>
        Portfolio Options
        <i class="fas fa-angle-left right"></i>
    </p>
</a>
<ul class="nav nav-treeview">
  <li class="nav-item">
    <a href="{{route('admin.portfolios.index')}}" class="nav-link  {{ (\Request::route()->getName() == 'admin.portfolios.index') ? 'active' : '' }}">
      <i class="nav-icon fas fa-briefcase"></i>
      <p>Projects</p>
  </a>
</li>
<li class="nav-item">
    <a href="{{action('Backend\PortfolioController@getMenu')}}" class="nav-link{{ (\Request::route()->getName() == 'admin.menus') ? 'active' : '' }}">
      <i class="fa fa-plus nav-icon"></i>
      <p>Menus</p>
  </a>
</li>
<li class="nav-item">
    <a href="{{action('Backend\PortfolioController@getSkills')}}" class="nav-link">
      <i class="fa fa-tasks nav-icon"></i>
      <p>Skills</p>
  </a>
</li>
<li class="nav-item">
    <a href="{{action('Backend\PortfolioController@getExperience')}}" class="nav-link">
      <i class="fa fa-history nav-icon"></i>
      <p>Experience</p>
  </a>
</li>
<li class="nav-item">
    <a href="{{action('Backend\PortfolioController@getBanner')}}" class="nav-link">
      <i class="fa fa-image nav-icon"></i>
      <p>Banner</p>
  </a>
</li>
<li class="nav-item">
    <a href="{{action('Backend\PortfolioController@getService')}}" class="nav-link">
      <i class="far fa-edit nav-icon"></i>
      <p>Service</p>
  </a>
</li>
<li class="nav-item">
    <a href="pages/layout/collapsed-sidebar.html" class="nav-link">
      <i class="fa fa-cog nav-icon"></i>
      <p>Settings</p>
  </a>
</li>
</ul>

</ul>
</nav>
<!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>