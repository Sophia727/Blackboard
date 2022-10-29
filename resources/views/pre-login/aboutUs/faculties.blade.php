@extends('template.homepage') 
@section('content')
<img src="{{asset('images/etudiants-amphitheatre2.jpg')}}" class="d-block w-100 amphi" alt="les inscriptions sont ouvertes!" >

<div class="container preLogin_faculties">
  <div>
      <h3 style="text-transform: uppercase">Our Faculties and Programs</h3>
  </div><hr>
  <div>
  @foreach ($faculty as $faculty)
      
      <div class="card mb-3">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="{{asset('images/faculty.jpg')}}" class="img-fluid rounded-start" alt="faculty logo placeholder">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h3 class="card-title">{{$faculty->name}}</h3>
                <p class="card-text">Choose your path and be one step closer to realizing your dreams.</p>
              <div class="text-right">
                  <a class="btn btn-outline-primary text-primary" href="{{route('faculty.profile', ['view'=> 'pre-login.aboutUs.facultyProfile', 'id'=>$faculty->id])}}">Discover more</a>
                  {{-- <a href="{{route('speciality.list',['view'=> 'post-login.admin.lists.specialityList', 'id'=>$faculty->id])}}" class="btn btn-outline-secondary">See all specialities</a> --}}

                </div>
              </div>
            </div>
          </div>
        </div>
      @endforeach
  </div>
</div>
@endsection