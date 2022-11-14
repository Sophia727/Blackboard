@extends('template.user_homepage')
@section('content')

<div class="container facultyProfile">
    <h2 class="text-center">{{$speciality->name}}</h2>
    <div class="text-center mt-4">
    <div class="btn btn-success">
        <a  href="{{route('add.grades',['view'=> 'post-login.users.professor.addGrades', 'id'=>$speciality->id])}}">View students list</a>
    </div>
    <div class="btn btn-warning">
        <a   href="{{route('add.subject')}}">Add Subject</a>
    </div>
</div>
   
    <hr>
    
    <section >
        <div class="card-group mt-5">
            @foreach ($subjects as $subject)

            <div class="card" style="margin: 20px" >
                <div class="card-body">
                    <h4 href="#" class="card-title">{{$subject->name}}</h4>
                </div>
            </div>
          @endforeach

    </section>
</div>

@endsection