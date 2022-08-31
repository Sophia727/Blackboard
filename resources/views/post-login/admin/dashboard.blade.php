@extends('template.user_homepage')
@section('content')
<head>
<link rel="stylesheet" href="{{asset('css/post-login/dashboard.css')}}"> 
</head>

<div class="row">
    <div class="col-1">
        @include('post-login.components.sidebar_admin')
    </div>
    <div class="col-10  ">
        <h1>Dashboard</h1>

     {{-- first row of cards --}}
        <div class="row">
            <div class="col-md-4 col-xl-4">
                <div class="card bg-c-purple order-card">
                    <a role="button"
                    href="{{route('admins.list')}}">
                        <div class="card-block">
                            <h3 class="m-b-20">Admins</h3>
                        </div>
                    </a>
                </div>
            </div>
            
            <div class="col-md-4 col-xl-4">
                <div class="card bg-c-greenish order-card">
                    <a role="button"
                    href="{{route('institution.info')}}" >
                        <div class="card-block">
                            <h3 class="m-b-20">Institution</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-xl-4">
                <div class="card bg-c-darkblue order-card">
                    <a role="button"
                    href="{{route('reports.info')}}">
                        <div class="card-block">
                            <h3 class="m-b-20">Reports</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        {{-- second row of cards --}}
        <div class="row">
            <div class="col-md-4 col-xl-3">
                <div class="card bg-c-blue order-card">
                    <a data-bs-toggle="collapse" role="button" aria-expanded="false" 
                    href="#classrooms" 
                    aria-controls="classrooms">
                        <div class="card-block">
                            <h3 class="m-b-20">Classrooms</h3>
                        </div>
                    </a>
                </div>
            </div>
            
            <div class="col-md-4 col-xl-3">
                <div class="card bg-c-green order-card">
                    <a data-bs-toggle="collapse" role="button" aria-expanded="false" 
                    href="#grades" 
                    aria-controls="grades">
                        <div class="card-block">
                            <h3 class="m-b-20">Grades</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-xl-3">
                <div class="card bg-c-yellow order-card">
                    <a data-bs-toggle="collapse" role="button" aria-expanded="false" 
                    href="#posts" 
                    aria-controls="posts">
                        <div class="card-block">
                            <h3 class="m-b-20">Posts</h3>
                        </div>
                    </a>
                </div>
            </div>
            
            <div class="col-md-4 col-xl-3">
                <div class="card bg-c-pink order-card">
                    <a data-bs-toggle="collapse" role="button" aria-expanded="false" 
                    href="#grades" 
                    aria-controls="grades">
                        <div class="card-block">
                            <h3 class="m-b-20">Attendance</h3>
                        </div>
                    </a>
                    
                </div>
            </div>
                        
              <div class="row">
                
                <div class="collapse multi-collapse" id="classrooms">
                    <div class="card card-body">
                        INSERER TABLEAU CLASSROOMS
                    </div>
                </div>
                <div class="collapse multi-collapse" id="grades">
                    <div class="card card-body">
                        INSERER GRADES
                    </div>
                </div>
                <div class="collapse multi-collapse" id="posts">
                    <div class="card card-body">
                        INSERER WHATEVER YOU WANT
                    </div>
                </div>
                <div class="collapse multi-collapse" id="reports">
                    <div class="card card-body">
                        This is a placeholder
                    </div>
                </div>
                
              </div>

        </div>
    </div>
</div>

@endsection