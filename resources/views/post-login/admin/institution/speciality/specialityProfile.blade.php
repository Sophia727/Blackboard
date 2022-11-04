@extends('template.user_homepage')
@section('content')

<div class="container facultyProfile">
    <h2 class="text-center">{{$speciality->name}}</h2>
    <hr>
    <h3 class="discoverDiff">Discover different subjects within our Faculty!</h3>
    <div class="card">
        @foreach ($subjects as $subject)
            
        
        <div class="card-header">
            <h4>{{$subject->name}}</h4>
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