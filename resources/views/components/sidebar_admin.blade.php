
<div class="d-flex flex-column flex-shrink-0 mb-4 navbar_admin" style="width: 8.5rem;">
    
    <ul class="nav nav-pills nav-flush flex-column mb-auto">
      <li>
         {{-- news feed --}}
        <a href="{{route('show.news')}}" class="nav-link py-3 border-bottom text-muted {{request()->routeIs('show.news') ? 'active' : '' }} text-left" title="professor" data-bs-toggle="tooltip" data-bs-placement="right">
          <i class="bi bi-newspaper fa-lg text-secondary"> </i> <span> Feed</span> </a> 
      
      </li>
      <li>
      {{-- Profs. --}}
        <a href="{{route('professors.list')}}" class="nav-link py-3 border-bottom text-muted {{request()->routeIs('professors.list') ? 'active' : '' }} text-left" title="professor" data-bs-toggle="tooltip" data-bs-placement="right">
          <i class="fa-solid fa-chalkboard-user fa-md text-secondary"> </i> <span> Professors</span> </a> 
      </li>
      <li>
        {{-- Students      --}}
        <a href="{{route('students.list')}}" class="nav-link py-3 border-bottom text-muted {{request()->routeIs('students.list') ? 'active' : '' }} text-left" title="Students" data-bs-toggle="tooltip" data-bs-placement="right">
            <i class="fa-solid fa-graduation-cap fa-md text-secondary"></i><span> Students</span>

        </a>
      </li>
      <li>
         {{-- Parents --}}
        <a href="{{route('parents.list')}}" class="nav-link py-3 border-bottom text-muted {{request()->routeIs('parents.list') ? 'active' : '' }} text-left" title="Parents" data-bs-toggle="tooltip" data-bs-placement="right">
            <i class="fa-solid fa-people-roof fa-md text-secondary"></i> <span> Parents</span>
  
        </a>
      </li>
      <li>
        <a href="{{route('write.post')}}" class="nav-link py-3 border-bottom text-muted {{request()->routeIs('write.post') ? 'active' : '' }} text-left" title="writePost" data-bs-toggle="tooltip" data-bs-placement="right">
          <i class="fa-solid fa-pen-to-square fa-md text-secondary"></i> <span> New Post</span>
          {{-- New Article --}}
        </a>
      </li>
      <li>
        <a href="{{route('add.user')}}" class="nav-link py-3 border-bottom text-muted {{request()->routeIs('add.user') ? 'active' : '' }} text-left" title="addUser" data-bs-toggle="tooltip" data-bs-placement="right">
          <i class="fa-solid fa-user-plus fa-md text-secondary"></i> <span> New User</span>
          {{-- Add new --}}
        </a>
      </li>
      <li>
        <a href="{{route('admin.dashboard')}}" class="nav-link py-3 border-bottom text-muted {{request()->routeIs('admin.dashboard') ? 'active' : '' }} text-left"  title="Dashboard" data-bs-toggle="tooltip" data-bs-placement="right">
            <i class="bi bi-grid fa-md text-secondary"></i> <span> Dashboard</span>
            {{-- Dashboard  --}}
        </a>
      </li>
    </ul>
    
  </div>
