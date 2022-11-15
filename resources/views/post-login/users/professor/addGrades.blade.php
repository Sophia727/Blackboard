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
    <div class="col-8 mb-5">
      <h1>
        <strong>Students in {{$speciality->name}}</strong>
      </h1>
    </div>
  
    <!-- Add grades Modal -->
    {{-- <div class="modal fade" id="addGradesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Grade</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group mb-3">
          
              <label for="">Student Name</label>
              <input type="text" class="name form-control">
            </div>
            <div class="form-group mb-3">
              <label for="">Semester</label>
              <input type="text" class="semester form-control">
            </div>
            <div class="form-group mb-3">
              <label for="">Subject</label>
              <input type="text" class="subject form-control">
            </div>
            <div class="form-group mb-3">
              <label for="">Grade</label>
              <input type="text" class="grade form-control">
            </div>
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary add_grades">Insert Grades</button>
          </div>
        </div>
      </div>
    </div>
     --}}
    
      <div class="col-4">
        <div class="row">
            <div class="col">
             {{-- inserer les filtres comme sur excel 
            <x-searchUser view="post-login.admin.lists.studentsList"/> --}}
            </div>
            <div class="col-6">            
              <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Insert Grades
              </button>
            </div>
        </div>
        
       
    </div>
    {{--<div class="d-flex justify-content-end">{{$role->links()}}</div>        --}}
  </div>
  <div class="row">
  
  <!-- Modal -->
  @if (Auth::user()->role =='admin')
  <form action="{{route('store.grades', ['id'=>$speciality->id])}}" method="post" enctype="multipart/form-data">
    @csrf
  @else
  <form action="{{route('storeProf.grades',['id'=>$speciality->id])}}" method="post" enctype="multipart/form-data">
    @csrf

  @endif
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
            <select class="form-select" required name="student_id">
              <option selected value>Select...</option>
              @foreach ($students as $student)  
                  <div class="form-check">
                      <option value="{{$student->id}}">{{$student->name}}</option>
                  </div>  
              @endforeach                    
          </select>   
                  
          </div>
          <div class="form-group mb-3">
            <label for="">Subject</label>
            <select class="form-select" required name="subject_id">
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
            <select class="form-select" required name="semester">
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
  
  {{--***** MAIN table ******--}}
  
      <div class="card-body ml-4">
          <div class="table-responsive text-center">
            <table class="table table-sm">
              <thead>

                <tr>
                  <th>All Students</th>
                  
                  <th scope="col">View grades</th> 
                        
                </tr>
              </thead>
              
                <tbody>
                  @foreach ($students as $student)
                  <tr>
                    <td>{{$student->name}}</td> 
                    <td> 
                      @if (Auth::user()->role == "admin")
                      <a class="text-dark" href={{route('student.grades',['view'=>'post-login.users.professor.studentGrades', 'id'=>$student->id] )}}>Grades</a>
                      @else
                      <a class="text-dark" href={{route('studentProf.grades',['view'=>'post-login.users.professor.studentGrades', 'id'=>$student->id] )}}>Grades</a>
                      @endif                      
                     </td>
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

