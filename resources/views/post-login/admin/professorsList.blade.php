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
        <h1>Professors List</h1>
        <div class="row">
            
            {{-- insert code here --}}
        </div>
    </div>
</div>
@endsection