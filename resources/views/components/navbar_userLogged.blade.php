<div class="postlogin_navbar">
      <nav class="navbar navbar-expand-lg bg-transparent">
        <div class="container px-4">
          <a href="{{route('show.news')}}" class="navbar-brand fs-1 ml-4"><i class="bi bi-building text-muted"></i></a>
          <button
            type="button"
            class="navbar-toggler"
            data-bs-toggle="collapse"
            data-bs-target="#navmenu">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navmenu">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" href="{{route('show.news')}}">Home</a>
              </li>
              <li class="nav-item"><a class="nav-link" href="{{route('calendar.show')}}">Calendar</a></li>
              <li class="nav-item">
                <a class="nav-link" 
                  @if (Auth::user()->role =='admin')
                  href="{{route('admin.dashboard')}}"
                  @elseif (Auth::user()->role =='professor')
                  href="{{route('professor.dashboard')}}"
                  @elseif (Auth::user()->role =='parent')
                  href="{{route('parent.dashboard')}}"
                  @elseif (Auth::user()->role =='student')
                  href="{{route('student.dashboard')}}"
                  @endif
                > Dashboard
                </a>
              </li>

              <li class="nav-item">
                
                <div class="dropdown">
                  <a href="#" class="d-flex align-items-center justify-content-center p-2 link-dark text-decoration-none dropdown-toggle" id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person-circle fa-lg"></i>
                  </a>
                  <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser3">
                    <a class="dropdown-item" href="#"> <i class="bi bi-bell"></i> Notifications</a>
                    <a class="dropdown-item" href="#"> <i class="bi bi-envelope"></i>   Messages</a>
                    <a class="dropdown-item" href="{{route('show.news')}}"><i class="bi bi-heart"></i>  Feed</a>
                    <a class="dropdown-item" href="{{route('myProfile')}}"> <i class="bi bi-person"></i>  Profile</a>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="{{route('logout')}}"><i class="bi bi-box-arrow-right"></i> Sign out</a></li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>


  