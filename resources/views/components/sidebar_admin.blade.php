
<div class="d-flex flex-column flex-shrink-0 " style="width: 4.5rem;">
    
    <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
      <li>
        <a href="{{route('show.news')}}" class="nav-link py-3 border-bottom" title="Home" data-bs-toggle="tooltip" data-bs-placement="right">
            <i class="bi bi-house-door-fill fa-xl text-secondary"></i> 
            {{-- News       --}}
        </a> 
      </li>
      {{-- <li>
        <a href="{{route('admins.list')}}" class="nav-link py-3 border-bottom" title="admin" data-bs-toggle="tooltip" data-bs-placement="right">
            <svg xmlns="http://www.w3.org/2000/svg" fill="#ffff" viewBox="0 0 640 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M9.375 233.4C3.375 239.4 0 247.5 0 256v128c0 8.5 3.375 16.62 9.375 22.62S23.5 416 32 416h32V224H32C23.5 224 15.38 227.4 9.375 233.4zM464 96H352V32c0-17.62-14.38-32-32-32S288 14.38 288 32v64H176C131.8 96 96 131.8 96 176V448c0 35.38 28.62 64 64 64h320c35.38 0 64-28.62 64-64V176C544 131.8 508.3 96 464 96zM256 416H192v-32h64V416zM224 296C201.9 296 184 278.1 184 256S201.9 216 224 216S264 233.9 264 256S246.1 296 224 296zM352 416H288v-32h64V416zM448 416h-64v-32h64V416zM416 296c-22.12 0-40-17.88-40-40S393.9 216 416 216S456 233.9 456 256S438.1 296 416 296zM630.6 233.4C624.6 227.4 616.5 224 608 224h-32v192h32c8.5 0 16.62-3.375 22.62-9.375S640 392.5 640 384V256C640 247.5 636.6 239.4 630.6 233.4z"/></svg>     
        </a> 
      </li> --}}
      <li>
        <a href="{{route('professors.list')}}" class="nav-link py-3 border-bottom" title="professor" data-bs-toggle="tooltip" data-bs-placement="right">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" fill="#6c757d" viewBox="0 0 640 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M592 0h-384C181.5 0 160 22.25 160 49.63V96c23.42 0 45.1 6.781 63.1 17.81V64h352v288h-64V304c0-8.838-7.164-16-16-16h-96c-8.836 0-16 7.162-16 16V352H287.3c22.07 16.48 39.54 38.5 50.76 64h253.9C618.5 416 640 393.8 640 366.4V49.63C640 22.25 618.5 0 592 0zM160 320c53.02 0 96-42.98 96-96c0-53.02-42.98-96-96-96C106.1 128 64 170.1 64 224C64 277 106.1 320 160 320zM192 352H128c-70.69 0-128 57.31-128 128c0 17.67 14.33 32 32 32h256c17.67 0 32-14.33 32-32C320 409.3 262.7 352 192 352z"/></svg>        
        {{-- Profs. --}}
        </a> 
      </li>
      <li>
        <a href="{{route('students.list')}}" class="nav-link py-3 border-bottom" title="Students" data-bs-toggle="tooltip" data-bs-placement="right">
            <i class="bi bi-person-fill fa-xl text-secondary"></i>   
            {{-- Students      --}}
        </a>
      </li>
      <li>
        <a href="{{route('parents.list')}}" class="nav-link py-3 border-bottom" title="Parents" data-bs-toggle="tooltip" data-bs-placement="right">
            <i class="bi bi-people-fill fa-xl text-secondary"></i> 
            {{-- Parents --}}
        </a>
      </li>
      {{-- <li>
        <a href="#" class="nav-link py-3 border-bottom" title="Classes" data-bs-toggle="tooltip" data-bs-placement="right">
            <i class="bi bi-collection-fill fa-2x text-white"></i>
        </a>
      </li>
      <li>
        <a href="#" class="nav-link py-3 border-bottom" title="institution" data-bs-toggle="tooltip" data-bs-placement="right">
          <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M288 0H400C408.8 0 416 7.164 416 16V64C416 72.84 408.8 80 400 80H320V95.53L410.3 160H512C547.3 160 576 188.7 576 224V448C576 483.3 547.3 512 512 512H336V400C336 373.5 314.5 352 288 352C261.5 352 240 373.5 240 400V512H64C28.65 512 0 483.3 0 448V224C0 188.7 28.65 160 64 160H165.7L256 95.53V32C256 14.33 270.3 0 288 0V0zM288 192C261.5 192 240 213.5 240 240C240 266.5 261.5 288 288 288C314.5 288 336 266.5 336 240C336 213.5 314.5 192 288 192zM80 224C71.16 224 64 231.2 64 240V304C64 312.8 71.16 320 80 320H112C120.8 320 128 312.8 128 304V240C128 231.2 120.8 224 112 224H80zM448 304C448 312.8 455.2 320 464 320H496C504.8 320 512 312.8 512 304V240C512 231.2 504.8 224 496 224H464C455.2 224 448 231.2 448 240V304zM80 352C71.16 352 64 359.2 64 368V432C64 440.8 71.16 448 80 448H112C120.8 448 128 440.8 128 432V368C128 359.2 120.8 352 112 352H80zM464 352C455.2 352 448 359.2 448 368V432C448 440.8 455.2 448 464 448H496C504.8 448 512 440.8 512 432V368C512 359.2 504.8 352 496 352H464z"/></svg>
        </a> 
      </li> --}}
      <li>
        <a href="{{route('write.post')}}" class="nav-link py-3 border-bottom" title="writePost" data-bs-toggle="tooltip" data-bs-placement="right">
          <i class="fa-solid fa-pen-to-square text-secondary"></i> 
          {{-- New Article --}}
        </a>
      </li>
      <li>
        <a href="{{route('add.user')}}" class="nav-link py-3 border-bottom" title="addUser" data-bs-toggle="tooltip" data-bs-placement="right">
          <i class="fa-solid fa-user-plus text-secondary"></i> 
          {{-- Add new --}}
        </a>
      </li>
      <li>
        <a href="{{route('admin.dashboard')}}" class="nav-link py-3 border-bottom" title="Dashboard" data-bs-toggle="tooltip" data-bs-placement="right">
            <i class="bi bi-grid fa-xl text-secondary"></i> 
            {{-- Dashboard  --}}
        </a>
      </li>
    </ul>
    
  </div>
