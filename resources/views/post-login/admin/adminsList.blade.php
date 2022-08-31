@extends('template.user_homepage')
@section('content')
{{-- <head>
<link rel="stylesheet" href="{{asset('css/post-login/dashboard.css')}}">  
</head>--}}

<div class="row">
    <div class="col-1">
        @include('post-login.components.sidebar_admin')
    </div>
    <div class="col-10">
        <h1>Admins List</h1>
        <div class="row">
            
            {{-- insert code here --}}
            {{-- @foreach ($users as $user)
    <div class="usercards">
            <div class="card" style="width: 20rem;">
                <img src="{{$user->photo}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$user->job_title}}</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, soluta. Cupiditate ullam voluptas nesciunt repellendus!</p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item"><strong>{{$user->name}}</strong></li>
                  <li class="list-group-item">{{$user->birth_date}}</li>
                  <li class="list-group-item">Account created on: {{$user->created_at}}</li>
                </ul>
                <div class="card-body text-center">
                  <a href="#" class="card-link"><button type="button" class="btn btn-outline-success"> Choose me</button></a>
                  <a href="#" class="card-link"> <button type="button" class="btn btn-outline-primary">View profile </button></a>
                </div>
              </div>
      </div>
    
    @endforeach --}}
        </div>
    </div>
</div>
@endsection