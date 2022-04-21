
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{ route('dashboard') }}">
          <i class="bi bi-grid"></i>
          <span>{{ trans("backend/sidbar.dashboard") }}</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('AdminServices.index') }}">
          <i class="bi bi-grid"></i>
          <span>{{ trans("backend/sidbar.services") }}</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route("projects.index") }}">
          <i class="bi bi-grid"></i>
          <span>{{ trans("backend/sidbar.projects") }}</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route("post.index") }}">
          <i class="bi bi-grid"></i>
          <span>{{ trans("backend/sidbar.posts") }}</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route("admin") }}">
          <i class="bi bi-grid"></i>
          <span>{{ trans("backend/sidbar.admins") }}</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('register') }}">
          <i class="bi bi-grid"></i>
          <span>{{ trans("backend/sidbar.register") }}</span>
        </a>
      </li><!-- End Dashboard Nav -->

    </ul>

  </aside>
