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
          <li class="nav-item">
              <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                  <i class="fas fa-expand-arrows-alt"></i>
              </a>
          </li>
      </ul>
  </nav>
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <div class="brand-link" style="text-align: center">
          <span class="brand-text font-weight-light" style="text-align: center">Admin Dashboard</span>
      </div>
      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                  <img src="{{ url('public/assets/admin/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                      alt="User Image">
              </div>
              <div class="info">
                  <a href="#" class="d-block">{{ Auth::User()->name }}</a>
              </div>
          </div>
          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
                  <li class="nav-item">
                      <a href="{{ route('admin.dashboard') }}"
                          class="nav-link @if (Request::segment(2) == 'dashboard') active @endif">
                          <i class="nav-icon fas fa-tachometer-alt"></i>
                          <p>
                              Dashboard
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('admin.list') }}"
                          class="nav-link @if (Request::segment(2) == 'admin') active @endif">
                          <i class="nav-icon fas fa-user"></i>
                          <p>
                              Users
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('banners.list') }}"
                          class="nav-link @if (Request::segment(2) == 'banners') active @endif">
                          <i class="nav-icon fas fa-images"></i>
                          <p>
                              Banners
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('sliders.list') }}"
                          class="nav-link @if (Request::segment(2) == 'sliders') active @endif">
                          <i class="nav-icon fas fa-sliders-h"></i>
                          <p>Sliders</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('bodmembers.list') }}"
                          class="nav-link @if (Request::segment(2) == 'bodmembers') active @endif">
                          <i class="nav-icon fas fa-users"></i>
                          <p>BOD Members</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('gallery.list') }}"
                          class="nav-link @if (Request::segment(2) == 'gallery') active @endif">
                          <i class="nav-icon fas fa-image"></i>
                          <p>Gallery</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('services.list') }}"
                          class="nav-link @if (Request::segment(2) == 'services') active @endif">
                          <i class="nav-icon fas fa-image"></i>
                          <p>Services</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('news.list') }}"
                          class="nav-link @if (Request::segment(2) == 'news') active @endif">
                          <i class="nav-icon fas fa-newspaper"></i>
                          <p>News & Updates</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('messages.list') }}"
                          class="nav-link @if (Request::segment(2) == 'messages') active @endif">
                          <i class="nav-icon fas fa-envelope"></i>
                          <p>Messages</p>
                      </a>
                  </li>
                  <li class="nav-item {{ request()->is('admin/tenders/*') ? 'menu-open' : '' }}">
                      <a href="javascript:void(0);" class="nav-link ">
                          <i class="nav-icon fas fa-download"></i>
                          <p>Downloads</p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ route('tenders.list') }}/1"
                                  class="nav-link @if (Request::segment(2) == 'tenders') active @endif">
                                  <i class="nav-icon fas fa-file"></i>
                                  <p>Tenders</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('tenders.list') }}/2"
                                  class="nav-link @if (Request::segment(2) == 'proactive_disclosure') active @endif">
                                  <i class="nav-icon fas fa-file"></i>
                                  <p>Proactive Disclosure</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('contact_us.list') }}"
                          class="nav-link @if (Request::segment(2) == 'contact_us') active @endif">
                          <i class="nav-icon fas fa-image"></i>
                          <p>Contact Us</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('contacts_directory.list') }}"
                          class="nav-link @if (Request::segment(2) == 'contacts_directory') active @endif">
                          <i class="nav-icon fas fa-folder"></i>
                          <p>Contacts Directory</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('admin.logout') }}" class="nav-link">
                          <i class="nav-icon fas fa-sign-out-alt"></i>
                          <p>Logout</p>
                      </a>
                  </li>
              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>
