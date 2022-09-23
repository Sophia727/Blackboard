
    <nav class="navbar navbar-expand-lg ">
      <div class="container px-4">
        <a href="{{route('pre-login.welcomepage')}}" class="navbar-brand fs-5"><i class="bi bi-building"></i> logo</a>

        <div class="collapse navbar-collapse" id="navmenu">
          <ul class="navbar-nav ms-auto">
            <div class="dropdown">
              <a class="btn dropdown-toggle bg-transparent" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                About us
              </a>
            
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{route('aboutUs')}}">History, Vision, Mission & Team</a></li>
                <li><a class="dropdown-item" href="{{route('faculty.list')}}">Faculties</a></li>
                <li><a class="dropdown-item" href="{{route('facilities')}}">Facilities and student life</a></li>
                <li><a class="dropdown-item" href="#">Partnerships</a></li>
              </ul>
            </div>

            {{-- <li class="nav-item"><a class="nav-link active" href="{{route('aboutUs')}}">About us</a></li> --}}
            <div class="dropdown">
              <a class="btn bg-transparent dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
            </div>
            <li class="nav-item"><a class="nav-link active" href="{{route('news')}}">News</a></li>
            <li class="nav-item"><a class="nav-link active" href="{{route('contactUs')}}">Contact us</a></li>
            <li class="nav-item"><a class="nav-link active" href="{{route('login')}}">  User Portal<i class="bi bi-box-arrow-in-right"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
