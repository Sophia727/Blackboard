@extends('template.homepage') 
@section('content')
<div class="container">
        <div>
            <img src="{{asset('images/amphi.jpg')}}" class="d-block w-100" alt="les inscriptions sont ouvertes!" style="width: 100%">
            <h3>Our Faculties and Programs </h3>
        </div><hr>
        <div>
        @foreach ($faculty as $faculty)
            
            <div class="card mb-3">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="{{asset('images/faculty.jpg')}}" class="img-fluid rounded-start" alt="faculty logo placeholder">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body" href="{{route('login')}}">
                      <h3 class="card-title">{{$faculty->name}}</h3>
                      <p class="card-text">Choose your path and be one step closer to realizing your dreams.</p>
                    <div class="text-right">
                        <a class="btn btn-outline-secondary text-warning" href="{{route('faculty.profile', ['id'=>$faculty->id])}}">Discover more</a>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
        </div>
</div>
@endsection