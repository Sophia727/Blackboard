@extends('template.user_homepage')
@section('content')


<h1>Institution file</h1>
<div class="row">
    
    <div class="col-xl-3">
        <div class="card bg-c-greenish order-card">
            <a role="button"
            href="{{route('add.faculty')}}">
                <div class="card-block">
                    <h3 class="m-b-20">Edit: About us</h3>
                </div>
            </a>
        </div>
    </div>
    <div class="col-xl-3">
        <div class="card bg-c-greenish order-card">
            <a role="button"
            href="{{route('add.faculty')}}">
                <div class="card-block">
                    <h3 class="m-b-20">Add Faculty</h3>
                </div>
            </a>
        </div>
    </div>
    <div class="col-xl-3">
        <div class="card bg-c-greenish order-card">
            <a role="button"
            href="{{route('add.speciality')}}">
                <div class="card-block">
                    <h3 class="m-b-20">Add Speciality</h3>
                </div>
            </a>
        </div>
    </div>
    
    <div class="col-xl-3">
        <div class="card bg-c-greenish order-card">
            <a role="button"
            href="{{route('add.subject')}}">
                <div class="card-block">
                    <h3 class="m-b-20">Add Subject</h3>
                </div>
            </a>
        </div>
    </div>
    <hr>
</div>
<div class="row" style="justify-content:center">
  @foreach ($faculty as $faculty)
  <div class="card" style="width: 18rem;">
    <img src="{{$faculty->logo}}" class="card-img-top" alt="{{$faculty->name}} logo ">
    <div class="card-body">
      <h5 class="card-title">{{$faculty->name}}</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="" class="btn btn-primary">See all specialities</a>
      {{-- <a href="{{route('speciality.list')}}" class="btn btn-primary">See all specialities</a> --}}
    </div>
  </div>
  @endforeach
</div>

@endsection