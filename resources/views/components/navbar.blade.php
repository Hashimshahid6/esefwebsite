<!-- ======= Header ======= -->
<header id="header" class="fixed-top header-transparent">
  <div class="container d-flex align-items-center justify-content-between">
    <div class="logo">
      <h1 class="text-light"><a href="{{route('home')}}"><span></span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="{{route('home')}}"><img src="{{asset('assets/img/logo.png')}}" alt="" class="img-fluid"></a>
    </div>
    <nav id="navbar" class="navbar">
      <ul>
        <li class="{{ Request::is('/') ? 'active' : '' }}"><a class="nav-link scrollto" href="{{route('home')}}">Home</a></li>
        <li class="dropdown {{ Request::is('about*') ? 'active' : '' }}"><a href="{{route('about')}}"><span>About Us</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="{{route('about')}}">Introduction</a></li>
            <li><a href="{{route('objectives')}}">Objectives</a></li>
            <li><a href="{{route('bod_members')}}">Board of Directors</a></li>
          </ul>
        </li>
        <li><a href="{{route('success-stories')}}">Success Stories</a></li>
        <li><a href="{{route('nfe')}}">NFE</a></li>
        <li class="dropdown {{ Request::is('schemes*') ? 'active' : '' }}"><a href="{{route('schemes')}}"><span>Schemes</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="{{route('gcs')}}">Girls Community School (GCS)</a></li>
            <li><a href="{{route('ess')}}">Education Support Scheme (ESS)</a></li>
            <li><a href="{{route('nsi')}}">New Schools Initiative (NSI)</a></li>
          </ul>
        </li>
        <li class="dropdown {{ Request::is('media*') ? 'active' : '' }}"><a href="{{route('social_media')}}"><span>Media</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="{{route('social_media')}}">Social Media</a></li>
            <li><a href="{{route('news_and_updates')}}">News & Updates</a></li>
            <li><a href="{{route('gallery')}}">Gallery</a></li>
          </ul>
        </li>
        <li class="dropdown {{ Request::is('downloads*') ? 'active' : '' }}"><a href="{{route('tender')}}"><span>Downloads</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="{{route('tender')}}">Tender</a></li>
            <li><a href="#">Proactive Disclosure</a></li>
          </ul>
        </li>
        <li><a href="https://www.esef.gkp.pk/poha/" target="_blank">POHA</a></li>
        {{-- <li><a href="#team">Complaint Cell</a></li> --}}
        <li><a href="{{route('contact_us')}}">Contact Us</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->
  </div>
</header><!-- End Header -->