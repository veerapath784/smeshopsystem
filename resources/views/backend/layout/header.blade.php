<header class="app-header navbar">
    <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
      </button>
    <a class="navbar-brand" href="#">
        <img class="navbar-brand-full" src="/images/brand/logo.svg" width="89" height="25" alt="CoreUI Logo">
        <img class="navbar-brand-minimized" src="/images/brand/sygnet.svg" width="30" height="30" alt="CoreUI Logo">
      </a>
    <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
        <span class="navbar-toggler-icon"></span>
      </button>
    <ul class="nav navbar-nav d-md-down-none">
        <li class="nav-item px-3">
            <a class="nav-link" href="#">หน้าหลัก</a>
        </li>
        <li class="nav-item px-3">
            <a class="nav-link" href="home">Admin</a>
        </li>
        <li class="nav-item px-3">
            <a class="nav-link" href="#">Settings</a>
        </li>
    </ul>
    <ul class="nav navbar-nav ml-auto">

        <li class="nav-item dropdown mr-5">
            @if(auth()->check())
            <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
           {{ auth()->user()->name}}
          </a> @endif
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header text-center">
                    <strong>Account</strong>
                </div>
                <a class="dropdown-item" href="#">
              <i class="fa fa-bell-o"></i> Updates
              <span class="badge badge-info">42</span>
            </a>
                <a class="dropdown-item" href="#">
              <i class="fa fa-envelope-o"></i> Messages
              <span class="badge badge-success">42</span>
            </a>
                <a class="dropdown-item" href="#">
              <i class="fa fa-tasks"></i> Tasks
              <span class="badge badge-danger">42</span>
            </a>
                <a class="dropdown-item" href="#">
              <i class="fa fa-comments"></i> Comments
              <span class="badge badge-warning">42</span>
            </a>
                <div class="dropdown-header text-center">
                    <strong>Settings</strong>
                </div>
                <a class="dropdown-item" href="#">
              <i class="fa fa-user"></i> Profile</a>
                <a class="dropdown-item" href="#">
              <i class="fa fa-wrench"></i> Settings</a>
                <a class="dropdown-item" href="#">
              <i class="fa fa-usd"></i> Payments
              <span class="badge badge-secondary">42</span>
            </a>
                <a class="dropdown-item" href="#">
              <i class="fa fa-file"></i> Projects
              <span class="badge badge-primary">42</span>
            </a>
                <div class="divider"></div>
                <a class="dropdown-item" href="#">
              <i class="fa fa-shield"></i> Lock Account</a>

                <a class="dropdown-item" href="/logout">
              <i class="fa fa-lock"></i> Logout</a>

            </div>
        </li>

    </ul>


</header>
