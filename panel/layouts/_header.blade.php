<!-- Navbar -->

<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

     
      <!-- Messages Dropdown Menu -->
      <li class="nav-item ">
        {{--<a class="nav-link" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge"></span>
        </a>--}}
        <div class="navbar-nav font-weight-bold mx-auto py-0">
            <a href="{{ url('') }}" class="btn btn-primary px-4">Accueil</a>
        </div>
      </li>
      


    </ul>
  </nav>
  <!-- /.navbar -->

  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="javascript:;" class="brand-link" style="text-align: center">
      
      <span class="brand-text font-weight-light" style="font-size: bold !important;font-size: 20px;">DEVLOG</span>
      
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img style="height: 40px; width: 40px;" src="{{ $getUser->getProfile() }}" class="img-circle elevation-2" alt="{{  Auth::user()->name }}">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{  Auth::user()->name }}</a>
        </div>
      </div>



      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

           
                <li class="nav-item">
                    <a href="{{ url('panel/dashboard') }}" class="nav-link @if(Request::segment(2) == 'dashboard') active @endif">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                    </p>
                    </a>
                </li>
               
                
                <li class="nav-item">
                    <a href="{{ url('panel/category/list') }}" class="nav-link @if(Request::segment(2) == 'category') active @endif">
                    <i class="nav-icon far fa-user"></i>
                    <p>
                        Category
                    </p>
                    </a>
                </li>
               
                <li class="nav-item">
                    <a href="#" class="nav-link @if(Request::segment(2) == 'blog') active @endif">
                    <i class="nav-icon far fa-user"></i>
                    <p>
                        Blog
                    </p>
                    </a>
                </li>
                
                
                <li class="nav-item">
                    <a href="#" class="nav-link @if(Request::segment(2) == 'change-password') active @endif">
                    <i class="nav-icon fas fa-lock"></i>
                    <p>
                        Change Password
                    </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link @if(Request::segment(2) == 'account-setting') active @endif">
                    <i class="nav-icon fas fa-cog"></i>
                    <p>
                        Account Setting
                    </p>
                    </a>
                </li>
                


          <li class="nav-item">
            <a href="{{ url('logout') }}" class="nav-link">
              <i class="nav-icon far fa-user"></i>
              <p>
                Déconnexion
              </p>
            </a>
          </li>



        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


