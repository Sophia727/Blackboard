@extends('template.user_homepage')
@section('content')

<div>
    <h3 style="text-transform: uppercase" class="mb-4 mt-4"><strong> Faculties</strong></h3>
</div>
<hr>
<div>
    <div class="row row-cols-1 row-cols-md-2 g-4 mt-5 mb-5">
    @foreach ($faculties as $faculty)

        <div class="col">
          @if (Auth::user()->role == "admin")
          <a class="text-dark" href="{{route('chooseSpec.grade',['view'=> 'post-login.users.professor.chooseSpecToGrade', 'id'=>$faculty->id])}}">
          @else
          <a class="text-dark" href="{{route('chooseSpeciality.grade',['view'=> 'post-login.users.professor.chooseSpecToGrade', 'id'=>$faculty->id])}}">
          @endif
          <div class="card">
            <div class="card-body">
              <h3 class="card-title">{{$faculty->name}}</h3>
            <i class="bi bi-hand-index-thumb fa-xl text-warning"></i>
        </div>
          </div>
        </a>
        </div>
    
    @endforeach
</div>    
</div>

@endsection