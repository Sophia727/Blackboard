@extends('template.homepage')
@section('content')
<div class="container">
    <div class="card text-bg-dark">
        <img src="{{asset('images/diff-facu.jpg')}}" class="card-img" alt="...">
        <div class="card-img-overlay">
            <h2>{{$faculty->name}}</h2>
            <p class="card-text">Lorem ipsum dolor sit amet ipsum consectetur adipisicing elit!</p>
        </div>
      </div>
    <hr>
    <h3>Discover different specialities within our campus!</h3>
    <div class="card">
        @foreach ($speciality as $speciality)
            
        
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
                <div class="text-right"><a type="button" class="btn btn-outline-secondary text-warning" href="{{route('contactUs')}}">Schedule a meeting!</a> </div>
            </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection