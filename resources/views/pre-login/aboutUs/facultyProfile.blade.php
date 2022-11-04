@extends('template.homepage')
@section('content')
<img src="{{asset('images/students-studying.jpg')}}" class="card-img facultyProfile_coverPic" alt="Students representing different faculties" height="400px">

<div class="container facultyProfile">
    <h2 class="text-center"><strong>{{$faculty->name}}</strong></h2>
    
    <hr>
    
    <div class="card-group">
        @foreach ($specialities as $speciality)
        <div class="card-group" style="margin: 15px; background:lightgrey" >
            <div class="card-body">
                <div class="card-title mb-4">
                    <h4>{{$speciality->name}}</h4>

                </div>
                <p class="card-text">3360* hours of theoretical training<br> 1500 hours of clinical practical training <br> 150 complete and validated consultations. <br></p>
                <a class="text-center text-primary" href="{{route('contactUs')}}">Schedule a meeting!</a>

            </div>
        </div>
        @endforeach
    </div>
    {{-- <img src="{{asset('images/happy_students.jpg')}}"> --}}
</div>

@endsection