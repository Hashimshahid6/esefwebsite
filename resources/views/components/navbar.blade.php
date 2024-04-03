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
            <li><a href="{{route('about')}}" class="{{ Request::is('about') ? 'active' : '' }}">Introduction</a></li>
            <li><a href="{{route('objectives')}}" class="{{ Request::is('objectives') ? 'active' : '' }}">Objectives</a></li>
            <li><a href="{{route('bod_members')}}" class="{{ Request::is('bod_members') ? 'active' : '' }}">Board of Directors</a></li>
          </ul>
        </li>
        <li class="dropdown {{ Request::is('schemes*') ? 'active' : '' }}"><a href="{{route('schemes')}}"><span>Schemes</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="{{route('gcs')}}" class="{{ Request::is('gcs') ? 'active' : '' }}">Girls Community School (GCS)</a></li>
            <li><a href="{{route('ess')}}" class="{{ Request::is('ess') ? 'active' : '' }}">Education Support Scheme (ESS)</a></li>
            <li><a href="{{route('nsi')}}" class="{{ Request::is('nsi') ? 'active' : '' }}">New Schools Initiative (NSI)</a></li>
          </ul>
        </li>
        <li class="dropdown {{ Request::is('media*') ? 'active' : '' }}"><a href="{{route('social_media')}}"><span>Media</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="{{route('social_media')}}" class="{{ Request::is('social_media*') ? 'active' : '' }}">Social Media</a></li>
            <li><a href="{{route('news_and_updates')}}" class="{{ Request::is('news_and_updates*') ? 'active' : '' }}">News & Updates</a></li>
            <li><a href="{{route('gallery')}}" class="{{ Request::is('gallery*') ? 'active' : '' }}">Gallery</a></li>
          </ul>
        </li>
        <li class="dropdown"><a href=""><span>Downloads</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="tender.html">Tender</a></li>
            <li><a href="#">Proactive Disclosure</a></li>
          </ul>
        </li>
        <li><a href="#team">Complaint Cell</a></li>
        <li><a href="contact.html">Contact Us</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->
  </div>
</header><!-- End Header -->