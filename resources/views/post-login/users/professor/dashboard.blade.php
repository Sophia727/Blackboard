@extends('template.user_homepage')
@section('content')
<div class="card ">
    <div class="card-header">    
        <h4 class="float-left">Dashboard</h4>

    </div>
</div>

<div class="row mb-5" >
    {{-- alert message box --}}
    @if(session('status'))
    <x-alert type="success" :message="session('status')" class="mb-4"/>   
    @endif
    @if(session('error'))
    <x-alert type="danger" :message="session('error')" class="mb-4"/>   
    @endif

<div class="row">
    <div class="col-md-4 col-xl-4">
        <div class="card order-card">
            <a role="button"
            href="#"> 
                <div class="card-block ">
                    <h3 class="m-b-20 text-dark"> Inbox 
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" fill="#6aafff" class="bi bi-envelope-fill ml-2" viewBox="0 0 16 16">
                            <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                        </svg>
                        
                    </h3>
                </div>
            </a>
        </div>
    </div>
    <div class="col-md-4 col-xl-4">
        <div class="card order-card">
            <a role="button"
            href="{{route('studentsProf.list')}}"> 
                <div class="card-block">
                    <h3 class="m-b-20 flaticon-rating text-dark">
                        Students
                        <i class="fa-solid fa-graduation-cap fa-lg ms-2" style="color:rgb(209, 76, 149);"></i>   
                    </h3>
                </div>
            </a>
        </div>
    </div>
    <div class="col-md-4 col-xl-4">
        <div class="card order-card">
            <a role="button"
            href="{{route('parentsProf.list')}}"> 
                <div class="card-block">
                    <h3 class="m-b-20 flaticon-rating text-dark">
                        Parents
                        <i class="fa-solid fa-people-roof fa-xl ms-2" style="color:rgb(236, 139, 74)"></i>                     </h3>
                </div>
            </a>
        </div>
    </div>
    <div class="col-md-4 col-xl-4">
        <div class="card order-card">
            <a role="button"
            href="{{route('choose.faculty')}}"> 
                <div class="card-block">
                    <h3 class="m-b-20 flaticon-rating text-dark">
                        Grades
                         <?xml version="1.0" ?><svg width="70" height="50" fill="#53dc8f" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g id="Passed_exam"><path d="M417.875,46H94.2126A13.2576,13.2576,0,0,0,81,59.2126V452.875A13.1835,13.1835,0,0,0,94.2126,466H417.875A13.1072,13.1072,0,0,0,431,452.875V59.2126A13.1814,13.1814,0,0,0,417.875,46ZM238.5,396.3493H151a13.125,13.125,0,0,1,0-26.25h87.5C255.7308,370.3674,255.7757,396.0737,238.5,396.3493Zm0-96.25H151a13.125,13.125,0,0,1,0-26.25h87.5C255.7308,274.1174,255.7757,299.8237,238.5,300.0993ZM273.85,194.75c-.2563,17.2351-25.9829,17.2672-26.25-.0011V126.7623a41.3874,41.3874,0,0,1,82.7747,0V194.75c-.282,17.2458-25.968,17.265-26.25-.0011V176.2866H273.85Zm96.4252,176.2241-43.0493,43.05a12.6979,12.6979,0,0,1-9.2755,3.8506,12.9869,12.9869,0,0,1-9.2755-3.8506l-18.2007-18.2c-11.918-12.3474,6.2036-30.6357,18.551-18.55l8.9252,8.9241,33.7738-33.7738C364.2043,340.5007,382.311,358.6587,370.2755,370.9741Zm0-96.25-43.0493,43.05a12.6979,12.6979,0,0,1-9.2755,3.8506,12.9869,12.9869,0,0,1-9.2755-3.8506l-18.2007-18.2c-11.918-12.3474,6.2036-30.6357,18.551-18.55l8.9252,8.9241,33.7738-33.7738C364.2043,244.2507,382.311,262.4087,370.2755,274.7241Z"/><path d="M304.125,126.7623a15.1374,15.1374,0,0,0-30.2747,0v23.2743H304.125Z"/></g></svg>
                    </h3>
                </div>
            </a>
        </div>
    </div>
    <div class="col-md-4 col-xl-4">
        <div class="card order-card">
            <a role="button"
            href="{{route('show.news')}}">
                <div class="card-block">
                    <h3 class="m-b-20 text-dark">
                        News 
                        <svg xmlns="http://www.w3.org/2000/svg" width="45" fill="#33d9b8" class="bi bi-newspaper ml-2" viewBox="0 0 16 16">
                            <path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z"/>
                            <path d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z"/>
                          </svg>
                    </h3>
                </div>
            </a>
        </div>
    </div>
    <div class="col-md-4 col-xl-4">
        <div class="card order-card">
            <a role="button"
            href="{{route('write.post')}}">
                <div class="card-block">
                    <h3 class="m-b-20 text-dark">
                        New Article
                        <svg xmlns="http://www.w3.org/2000/svg" width="45" fill="#c297dd" class="bi bi-pencil-square ms-2" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                          </svg>
                    </h3>
                </div>
            </a>
        </div>
    </div><div class="col-md-4 col-xl-4">
        <div class="card order-card">
            <a role="button"
            href="{{route('calendar.show')}}">
                <div class="card-block">
                    <h3 class="m-b-20 text-dark">
                        Calendar
                        <svg xmlns="http://www.w3.org/2000/svg"  width="45" fill="#ffc167" class="bi bi-calendar-event ml-2" viewBox="0 0 16 16">
                            <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                          </svg>
                    </h3>
                </div>
            </a>
        </div>
    </div><div class="col-md-4 col-xl-4">
        <div class="card order-card">
            <a role="button"
            href="{{route('myProfile', ['view'=> 'post-login.users.profile.myProfile'])}}">                <div class="card-block">
                <h3 class="m-b-20 text-dark"> Profile
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" fill="#E63946" class="bi bi-person-fill" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                      </svg>
                </h3>
                </div>
            </a>
        </div>
    </div>
    
    
</div>


@endsection