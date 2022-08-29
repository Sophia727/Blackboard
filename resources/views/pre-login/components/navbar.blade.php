
    <nav class="navbar navbar-expand-lg" style="background-color: transparent;">
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
            <li class="nav-item"><a class="nav-link active" href="{{route('news')}}">News</a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('aboutUs')}}">About us</a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('contactUs')}}">Contact us</a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('login')}}">  User Portal<i class="bi bi-box-arrow-in-right"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
