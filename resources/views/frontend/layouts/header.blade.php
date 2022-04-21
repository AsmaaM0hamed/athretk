 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">Athrtek</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="../frontend/assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="{{ route("/") }}">{{ trans("frontend/header.Home") }}</a></li>
          <li><a class="nav-link scrollto" href="#about">{{ trans("frontend/header.About") }}</a></li>
          <li><a class="nav-link scrollto" href="{{ route("services") }}">{{ trans("frontend/header.Services") }}</a></li>
          <li><a class="nav-link scrollto " href="{{ route("allProjects") }}">{{ trans("frontend/header.Portfolio") }}</a></li>
          <li><a class="nav-link scrollto" href="#team">{{ trans("frontend/header.Team") }}</a></li>
          <li><a class="nav-link scrollto" href="{{ route("news") }}">{{ trans("frontend/header.News") }}</a></li>

          <li><a class="nav-link scrollto" href="#contact">{{ trans("frontend/header.Contact") }}</a></li>

          <li class="dropdown"><a href="#">
            <span>
              @if (LaravelLocalization::getCurrentLocaleNative()=="العربية")
            en
              @else
              العربية
          @endif
          </span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
              <li>
                   <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                {{ $properties['native'] }}
                     </a>
             </li>
              @endforeach
            </ul>
          </li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
