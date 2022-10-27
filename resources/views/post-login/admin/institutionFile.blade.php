@extends('template.user_homepage')
@section('content')


<h1>Institution file</h1>
<div class="row">
    

    <div class="col-xl-4">
        <div class="card bg-c-greenish order-card">
            <a role="button"
            href="{{route('add.faculty')}}">
                <div class="card-block">
                    <h3 class="m-b-20"> 
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                      </svg>
                      Add Faculty</h3>
                </div>
            </a>
        </div>
    </div>
    <div class="col-xl-4">
        <div class="card bg-c-greenish order-card">
            <a role="button"
            href="{{route('add.speciality')}}">
                <div class="card-block">
                    <h3 class="m-b-20">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                          </svg>
                          Add Speciality</h3>
                </div>
            </a>
        </div>
    </div>
    
    <div class="col-xl-4">
        <div class="card bg-c-greenish order-card">
            <a role="button"
            href="{{route('add.subject')}}">
                <div class="card-block">
                    <h3 class="m-b-20">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                          </svg>
                          Add Subject</h3>
                </div>
            </a>
        </div>
    </div>
    <hr>
</div>
<div class="row">
  @foreach ($faculty as $faculty)
  
    <div class="row mb-5">
    <div class="col-5 text-center">
        <img src="{{$faculty->logo}}" class="card-img-left" alt="{{$faculty->name}} logo ">
    </div>
    <div class="col-5 text-left">
            <h5 class="card-title ">{{$faculty->name}}</h5>
            <p class="card-text">Here goes a quick description of the faculty...</p>
    </div>
    <div class="col-2">
        {{-- <a href="" class="btn btn-outline-secondary">See all Specialities</a> --}}
        <a href="{{route('speciality.list',['view'=> 'post-login.admin.lists.specialityList', 'id'=>$faculty->id])}}" class="btn btn-outline-secondary">See all specialities</a>

    </div>
    </div>
 

  @endforeach
</div>


@endsection