
    <nav class="navbar navbar-expand-lg bg-transparent">
        <div class="container px-4">
          <a href="#" class="navbar-brand fs-5"><i class="bi bi-building"></i> logo</a>
          <button
            type="button"
            class="navbar-toggler"
            data-bs-toggle="collapse"
            data-bs-target="#navmenu"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navmenu">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" href="#">Home</a>
              </li>
              <li class="nav-item"><a class="nav-link" href="#">Calendar</a></li>
              {{-- <li class="nav-item"><a class="nav-link" href="#">Contact us</a></li> --}}
              <li class="nav-item">
              {{-- <div class="dropdown">
                <a class="btn" type="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Profile
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#"> <i class="bi bi-bell"></i> Notifications</a>
                  <a class="dropdown-item" href="#"> <i class="bi bi-envelope"></i>  Messages</a>
                  <a class="dropdown-item" href="#"> <i class="bi bi-grid"></i> Dashboard</a>
                </div>
              </div> --}}
              <div class="dropdown" style="margin-top: 0">
                <a href="#" class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none dropdown-toggle" id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="bi bi-person-circle fa-lg"></i>
                </a>
                <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser3">
                  <a class="dropdown-item" href="#"> <i class="bi bi-bell"></i> Notifications</a>
                  <a class="dropdown-item" href="#"> <i class="bi bi-envelope"></i>  Messages</a>
                  <a class="dropdown-item" href="#"> <i class="bi bi-grid"></i> Dashboard</a>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-right"></i> Sign out</a></li>
                </ul>
              </div>
              </li>
             
          </div>
        </div>
      </nav>
  