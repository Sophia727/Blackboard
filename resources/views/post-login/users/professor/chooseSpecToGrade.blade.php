@extends('template.user_homepage')
@section('content')
<div>
  <h3 style="text-transform: uppercase" class="mb-4 mt-4"><strong>{{$faculty->name}}</strong></h3>
</div>
<hr>
<div>
  <div class="row row-cols-1 row-cols-md-2 g-4 mt-5">
    @foreach ($specialities as $speciality)
      <div class="col">
        @if (Auth::user()->role == "admin")
          <a class="text-dark" href="{{route('add.grades',['view'=> 'post-login.users.professor.addGrades', 'id'=>$speciality->id])}}">
            @else
            <a class="text-dark" href="{{route('addProf.grades',['view'=> 'post-login.users.professor.addGrades', 'id'=>$speciality->id])}}">
              @endif
          <div class="card">
              <div class="card-body">
                <h3 class="card-title">{{$speciality->name}}</h3>
                <i class="bi bi-hand-index-thumb fa-xl text-success"></i>
          </div>
        </div>
          </a>
      </div>
    @endforeach
  </div>    
</div>
@endsection