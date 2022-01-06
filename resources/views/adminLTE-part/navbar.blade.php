<section class="navbar-adminTriplay">



  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/admin" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>

      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>


      {{--  <?php
      use App\Models\Notification;
      $users = Notification::where('user_id', auth()->user()->id)->orderBy('created_at', 'desc')->get();
      ?>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="far fa-bell"></i>
            @foreach ( $users as $user )

                    <span class="badge badge-danger navbar-badge">{{Notification::where('status','Belum Di Proses')->count()}}</span>
            @endforeach
          </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            @foreach ($users as $user)

            @if ($user->status == 'Sudah Di Proses' || $user->status == 'Gagal')

            @else
            <a href="/admin/permission" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                  <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                     {{$user->nameId}}
                      <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                    </h3>
                    <p class="text-sm">{{$user->name}}</p>
                    <p class="text-sm">{{$user->status}}</p>
                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> {{$user->created_at}}</p>
                  </div>
                </div>
                <!-- Message End -->
              </a>
            @endif

            <div class="dropdown-divider"></div>
          @endforeach

          <div class="dropdown-divider"></div>
          <a href="/admin/permission" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>  --}}


      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();
         document.getElementById('logout-form').submit();">
          {{ __('Logout') }}
      </a>

      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
      @csrf
      </form>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
</section>
