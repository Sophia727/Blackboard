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
</div> 
<div class="container p-4">
  {{-- <div class="col-9 mb-5"> --}}
    
    <div class="card text-left"> 
      <div class="card-header">
        <h4>{{$student->name}}</h4>
      </div>
      <div class="card-body ">
        <div class="row">
          <div class="col">
            <ul>
              <li>Speciality: {{$student->speciality->name}}</li>
              <li>Enrolled since: {{$student->created_at->format('d/m/Y')}}</li>
              @if ($student->last_sign_in_at != '')
              <li>Last login: {{$student->last_sign_in_at->format('d/m/Y - h:m')}}</li>
                
              @endif
            </ul>
           
          </div>
          <div class="col">
            <ul style="list-style: none;">
              <li><i class="fa-solid fa-envelope mb-2"></i>   {{$student->email}}
              </li>
              <li><i class="fa-solid fa-phone mb-1"></i>{{$student->phone}}
              </li>
            </ul>
          </div>
          <div class="col-2 mr-3">
            <div class="text-end">
            {{-- <a href="{{route('myProfile', ['view'=>post-login.users.profile.myProfile, 'id'=>$user->id])}}" title="myProfile"> --}}
            </div>
          </div>
        </div>
          </div>
          </div>
    </div>
    <div class="row">
    
  {{--***** MAIN table ******--}}
  
  <div class="card-body">
    <div class="table-responsive text-center">
      <table class="table table-sm mb-5">
        <thead>

          <tr>
            <th class="text-left">Subjects</th>
            <th scope="col">Grade</th> 
            <th scope="col">Semester</th> 
            <th scope="col">Remark</th> 
            <th scope="col">Uploaded by: </th> 
           
                       
          </tr>
        </thead>
        <tbody>
          @foreach ($grades as $grade)
          <tr>
            <td scope="col" class="text-left">{{$grade->subject->name}}</td> 
            <td scope="col">{{$grade->grade}}</td> 
            <td scope='col'>{{$grade->semester}}</td>
            <td scope='col'>{{$grade->message}}</td>
            <td scope='col'>{{$grade->author->name}}</td>
          </tr>
            @endforeach        
        </tbody>
        </table>
      </div>
    </div>
</div>
{{-- <div class="d-flex justify-content-end">{{$role->links()}}</div> --}}

</div>

@endsection

