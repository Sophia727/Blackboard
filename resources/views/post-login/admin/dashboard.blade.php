@extends('template.user_homepage')

@section('content')
        <div class="card">
            <div class="card-header">    
                <h4 class="float-left">Dashboard</h4>
        
            </div>
        </div>

        <div class="row">
            {{-- alert message box --}}
            @if(session('status'))
            <x-alert type="success" :message="session('status')" class="mb-4"/>   
            @endif
            @if(session('error'))
            <x-alert type="danger" :message="session('error')" class="mb-4"/>   
            @endif


            <div class="col-md-4 col-xl-4">
                <div class="card bg-c-purple order-card">
                    <a role="button"
                    href="{{route('admins.list')}}">
                        <div class="card-block">
                            <h3 class="m-b-20"><svg width="50" fill="#fefefe" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M320 0c17.7 0 32 14.3 32 32V96H480c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H160c-35.3 0-64-28.7-64-64V160c0-35.3 28.7-64 64-64H288V32c0-17.7 14.3-32 32-32zM208 384c-8.8 0-16 7.2-16 16s7.2 16 16 16h32c8.8 0 16-7.2 16-16s-7.2-16-16-16H208zm96 0c-8.8 0-16 7.2-16 16s7.2 16 16 16h32c8.8 0 16-7.2 16-16s-7.2-16-16-16H304zm96 0c-8.8 0-16 7.2-16 16s7.2 16 16 16h32c8.8 0 16-7.2 16-16s-7.2-16-16-16H400zM264 256c0-22.1-17.9-40-40-40s-40 17.9-40 40s17.9 40 40 40s40-17.9 40-40zm152 40c22.1 0 40-17.9 40-40s-17.9-40-40-40s-40 17.9-40 40s17.9 40 40 40zM48 224H64V416H48c-26.5 0-48-21.5-48-48V272c0-26.5 21.5-48 48-48zm544 0c26.5 0 48 21.5 48 48v96c0 26.5-21.5 48-48 48H576V224h16z"/></svg>
                                Admins</h3>
                        </div>
                    </a>
                </div>
            </div>
            
            <div class="col-md-4 col-xl-4">
                <div class="card bg-c-greenish order-card">
                    <a role="button"
                    href="{{route('institution.info')}}" >
                        <div class="card-block">
                            <h3 class="m-b-20"><svg width="50" fill="#fefefe" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M288 0H400c8.8 0 16 7.2 16 16V64c0 8.8-7.2 16-16 16H320V95.5L410.3 160H512c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H336V400c0-26.5-21.5-48-48-48s-48 21.5-48 48V512H64c-35.3 0-64-28.7-64-64V224c0-35.3 28.7-64 64-64H165.7L256 95.5V32c0-17.7 14.3-32 32-32zm48 240c0-26.5-21.5-48-48-48s-48 21.5-48 48s21.5 48 48 48s48-21.5 48-48zM80 224c-8.8 0-16 7.2-16 16v64c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V240c0-8.8-7.2-16-16-16H80zm368 16v64c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V240c0-8.8-7.2-16-16-16H464c-8.8 0-16 7.2-16 16zM80 352c-8.8 0-16 7.2-16 16v64c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V368c0-8.8-7.2-16-16-16H80zm384 0c-8.8 0-16 7.2-16 16v64c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V368c0-8.8-7.2-16-16-16H464z"/></svg> 
                                Institution</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-xl-4">
                <div class="card bg-c-darkblue order-card">
                    <a role="button"
                    href="{{route('reports.list')}}">
                        <div class="card-block">
                            <h3 class="m-b-20"><svg xmlns="http://www.w3.org/2000/svg" width="50" fill="#fefefe" class="bi bi-file-earmark-bar-graph" viewBox="0 0 16 16">
                                <path d="M10 13.5a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-6a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v6zm-2.5.5a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-1zm-3 0a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-1z"/>
                                <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
                              </svg>Reports</h3>
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
                    href="#postsList" 
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
                        {{-- <x-postsList/> --}}
                    </div>
                </div>
                <div class="collapse multi-collapse" id="reports">
                    <div class="card card-body">
                        This is a placeholder
                    </div>
                </div>
                
            </div>
        </div>


@endsection