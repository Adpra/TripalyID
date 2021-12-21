<section class="sidebar-adminTriplay">

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->saldo }}</a>
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
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          {{--  admin Triplay  --}}
          <li class="nav-item menu-is-opening menu-open">
            <a href="/admin" class="nav-link">
              <p>
                Admin Triplay
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: block;">
              <li class="nav-item">
                <a href="/admin/imageslide" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Image Slide</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/imagebanner" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Image Banner</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/video" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Videos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/pulse" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pulsa</p>
                </a>
              </li>
            </ul>
          </li>
          {{--  admin reseller  --}}
          <li class="nav-item menu-is-opening menu-open">
            <a href="#" class="nav-link">
              <p>
                Admin Reseller
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: block;">
              <li class="nav-item">
                <a href="/admin/gamereseller" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Game Reseller</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/status" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Status</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/permission" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Permission</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
</section>
