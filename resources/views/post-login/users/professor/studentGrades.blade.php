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
                <li>Enrolled since: {{$student->created_at}}</li>
                @if ($student->last_sign_in_at != '')
                <li>Last login: {{$student->last_sign_in_at}}</li>
                  
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
            
                    
                <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  Insert Grades
                </button>
              
          </div>
            </div>
          </div>
        </div>
        </div>
  </div>
  <div class="row">
  
  
  
  {{--***** MAIN table ******--}}
  
      <div class="card-body ml-4">
          <div class="table-responsive text-center">
            <table class="table table-sm mb-5">
              <thead>

                <tr>
                  <th class="text-left">Subjects</th>
                  <th scope="col">Grade</th> 
                  <th scope="col">Semester</th> 
                  <th scope="col">Remark</th> 
                  <th scope="col">Uploaded by: </th> 
                  @if (Auth::user()->role =='admin')
                  <th scope="col">Delete </th> 
                  @endif
                             
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
                  @if (Auth::user()->role =='admin')
                  <td>
                    <button onclick="if(confirm('Are you sure you want to delete this grade?')){
                      document.getElementById('grade-delete-{{$grade->id}}').submit(); }"
                    class="btn btn-outline-secondary btn-sm" type="submit" title="Delete">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                      <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                      <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                    </svg>
                  </button>
                    <form id="grade-delete-{{$grade->id}}" action="{{route('delete.grade', ['grade'=>$grade->id])}}" method="post">
                      @csrf
                      @method('delete')
                    </form>
                  </td>
                  @endif
                </tr>
                  @endforeach        
              </tbody>
              </table>
            </div>
          </div>
      </div>
      {{-- <div class="d-flex justify-content-end">{{$role->links()}}</div> --}}
  
  </div>

    <!-- Modal -->
    @if (Auth::user()->role =='admin')
    <form action="{{route('store.grades')}}" method="post" enctype="multipart/form-data">
      
      @csrf
    @elseif (Auth::user()->role =='professor')
    <form action="{{route('storeProf.grades')}}" method="post" enctype="multipart/form-data">
    @endif
    {{-- <form action="{{route('store.grades', ['view'=> 'post-login.users.professor.addGrades', 'id'=>$speciality->id])}}" method="post" enctype="multipart/form-data"> --}}
      @csrf
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Insert Grades</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="form-group mb-3">
              {{-- a modifier --}}
              <label for="">Student Name</label>
              <input type="hidden" name="student_id" class="form-control" value="{{$student->id}}">
              <input type="text" class="form-control" value="{{$student->name}}" disabled>
            </div>
            <div class="form-group mb-3">
              <label for="">Subject</label>
              <select class="form-select" name="subject_id">
                <option selected value>Select...</option>
                @foreach ($subjects as $subject)  
                    <div class="form-check">
                        <option value="{{$subject->id}}">{{$subject->name}}</option>
                    </div>  
                @endforeach  
              </select>
            </div>
            <div class="form-group mb-3">
              <label for="">Semester</label>
              <select class="form-select" name="semester">
                <option selected value>Select...</option>
                    <div class="form-check">
                        <option value="s1">semester 1</option>
                        <option value="s2">semester 2</option>
                        <option value="s3">semester 3</option>
                        <option value="s4">semester 4</option>
                        <option value="s5">semester 5</option>
                        <option value="s6">semester 6</option>
                        <option value="s7">semester 7</option>
                        <option value="s8">semester 8</option>
                        <option value="s9">semester 9</option>
                        <option value="s10">semester 10</option>
                        <option value="s11">semester 11</option>
                        <option value="s12">semester 12</option>
                        <option value="s13">semester 13</option>
                        <option value="s14">semester 14</option>

                    </div>  
              </select>
            </div>
            
            <div class="form-group mb-3">
              <label for="">Grade</label>
              <input type="text" class="grade form-control" name="grade">
            </div>
            <div class="form-group mb-3">
              <label for="">Remarks</label>
              <input type="text" class="remarks form-control" name="message">
            </div>
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Insert Grade</button>
          </div>
        </div>
      </div>
    </div>

@endsection

