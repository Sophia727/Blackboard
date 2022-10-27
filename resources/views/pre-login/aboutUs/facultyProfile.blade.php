@extends('template.homepage')
@section('content')
<img src="{{asset('images/diff-facu.jpg')}}" class="card-img facultyProfile_coverPic" alt="Students representing different faculties">

<div class="container facultyProfile">
    <h2 class="text-center">{{$faculty->name}}</h2>
    <div class="card facultyPresentation">
        <p class="card-text">Here stands a little presentation of the faculty, in order to inform future students about the great opportinities that are offered after student's parcours. 
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam repudiandae doloremque eius veniam molestias dolorum, dolores provident fuga iure, ducimus eaque ratione, praesentium voluptates dolorem alias optio. Laboriosam, natus nihil!
        </p>
    </div>
    <hr>
    <h3 class="discoverDiff">Discover different specialities within our Faculty!</h3>
    <div class="card">
        @foreach ($specialities as $speciality)
        
        <div class="card-header">
            <h4>{{$speciality->name}}</h4>
        </div>
        <div class="card-title">
            <h6>Program details: </h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-7">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Molestiae quasi consequatur ad ab distinctio nam, <br> voluptatem ex delectus impedit blanditiis.
                </div>
                <div class="col-5">
                    <div class="text-right"><a type="button" class="btn btn-outline-primary text-primary" href="{{route('contactUs')}}">Schedule a meeting!</a> </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection