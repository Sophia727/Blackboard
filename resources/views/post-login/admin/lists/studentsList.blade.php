@extends('template.user_homepage')
@section('content')

<div class="row">
  {{-- alert message box --}}
  @if(session('status'))
  <x-alert type="success" :message="session('status')" class="mb-4"/>   
  @endif
  @if(session('error'))
  <x-alert type="danger" :message="session('error')" class="mb-4"/>   
  @endif
  <div class="col-8">
    <h1>
      <strong>Students</strong>
    </h1>
  </div>
  <div class="col-4">
    <x-searchUser view="post-login.admin.lists.studentsList"/>
  </div>
  <div class="d-flex justify-content-end">{{$role->links()}}</div>       
</div><div class="row">
    
    <div class="card-body">
        <div class="table-responsive table-striped text-center">
          <table class="table  table-md">
            <thead>
              <tr>
                <th scope="col">Photo</th>
                <th scope="col">Name</th>
                <th scope="col">Speciality</th>
                <th scope="col">E-mail</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
          
              <tbody>
                @foreach ($role as $user)
                <tr class="justify-content-between">
                  <td>
                    @if($user->photo)
                      @if(Str::contains($user->photo, 'https://'))
                      <img src="{{$user->photo}}" alt="profile picture" class="rounded-circle p-1" height="75px" width="80px">
                      @else
                      <img src="{{asset($user->photo)}}" alt="{{$user->name}}" class="rounded-circle p-1" height="75px" width="80px">
                      @endif
                    @else
                    <img src="{{asset('images/profile-default.jpeg')}}" alt="{{$user->name}} profile picture" class="rounded-circle p-1" height="75px" width="80px">
                    
                    @endif
                  </td> 
                  <td >{{$user->name}}</td>
                  
                  @if ($user->speciality_id != '')
                  <td>{{$user->speciality->name}}</td>
                  @else
                  <td>N/A</td>

                  @endif
                  <td>{{$user->email}}</td>
                  <td>{{$user->phone}}</td>
                  <td> 
                     
                    @if (Auth::user()->role == "admin")
                      <a href="{{route('user.profile',['view'=> 'post-login.admin.profiles.userProfile', 'id'=>$user->id])}}" class="btn text-primary"><i class="fa-solid fa-eye"></i></a>
                      <a class="btn text-success" href={{route('student.grades',['view'=>'post-login.users.professor.studentGrades','id'=>$user->id] )}}>G</a>

                    @elseif (Auth::user()->role == "professor")
                      <a  class="btn btn-lg text-success" href={{route('studentProf.grades',['view'=>'post-login.users.professor.studentGrades','id'=>$user->id] )}}>G</a>
                    @elseif (Auth::user()->role == "parent")
                      <a  class="btn btn-lg text-success" href={{route('studentPar.grades',['view'=>'post-login.users.professor.studentGrades','id'=>$user->id] )}}>G</a>
                    
                      @endif
                  </td>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
    </div>
    <div class="d-flex justify-content-end">{{$role->links()}}</div>

</div>

@endsection