    <div class="prelogin_navbar">
    <nav class="navbar navbar-expand-lg">
      <div class="container px-4">
        <li>
          <a href="{{route('pre-login.welcomepage')}}" class="navbar-brand fs-2 text-light  {{request()->routeIs('pre-login.welcomepage') ? 'active' : '' }}"><i class="bi bi-building"></i> University</a>
        </li>
        <div class="collapse navbar-collapse" id="navmenu">
          <ul class="navbar-nav ms-auto">
            <li>
            <div class="dropdown">
              <a class="btn dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                About us
              </a>
            
              <ul class="dropdown-menu">
                <li><a class="dropdown-item {{request()->routeIs('aboutUs') ? 'active' : '' }}" href="{{route('aboutUs')}}">History & Mission</a></li>
                <li><a class="dropdown-item {{request()->routeIs('faculty.list') ? 'active' : '' }}" href="{{route('faculty.list')}}">Faculties</a></li>
                <li><a class="dropdown-item{{request()->routeIs('facilities') ? 'active' : '' }}" href="{{route('facilities')}}">Facilities and student life</a></li>
                <li><a class="dropdown-item" href="#">Partnerships</a></li>
              </ul>
            </div>
          </li>
            <div class="dropdown">
              <li><a class="btn dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Programs
              </a>
            
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Undergraduate Programs</a></li>
                <li><a class="dropdown-item" href="#">Postgraduate Programs</a></li>
                <li><a class="dropdown-item" href="#">Masters Programs</a></li>
                <li><a class="dropdown-item" href="#">Doctorate and PhD programs</a></li>
                <li><a class="dropdown-item" href="#">Courses and Bootcamps</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">All programs and courses</a></li>
              </ul>
            </li> 
            </div>
            <li class="nav-item"><a class="nav-link text-white{{request()->routeIs('news') ? 'active' : '' }}" href="{{route('news')}}"> News </a></li>
            <li class="nav-item"><a class="nav-link text-white{{request()->routeIs('contactUs') ? 'active' : '' }}" href="{{route('contactUs')}}">Contact us </a></li>
            <li class="nav-item"><a class="nav-link text-white{{request()->routeIs('login') ? 'active' : '' }}" href="{{route('login')}}">  User Portal <i class="bi bi-box-arrow-in-right"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
