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
        <strong>Grades</strong>
      </h1>
    </div>
  
    <!-- Add grades Modal -->
    <div class="modal fade" id="addGradesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
              {{-- a modifier --}}
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
    {{-- <div class="d-flex justify-content-end">{{$role->links()}}</div>        --}}
  </div><div class="row">
  
  <!-- Modal -->
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
              {{-- @foreach ($students as $student)  
                  <div class="form-check">
                      <option value="{{$student->id}}">{{$student->name}}</option>
                  </div>  
              @endforeach                     --}}
          </select>           
          </div>
          <div class="form-group mb-3">
            <label for="">Semester</label>
            <input type="text" class="semester form-control">
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
            <label for="">Grade</label>
            <input type="text" class="grade form-control">
          </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  
  
      <div class="card-body">
          <div class="table-responsive table-striped text-center">
            <table class="table table-sm">
              <thead>
                <tr>
                  {{-- <th scope="col">Semester</th> --}}
                  <th scope="col">Faculty</th>
                  <th scope="col">Speciality</th>
                  <th scope="col">Student</th>
                  {{-- <th scope="col"></th> --}}
                  {{-- general grade? for all sujects --}}
                  <th scope="col">Grades</th>
                </tr>
              </thead>
              <tbody>
                <tbody>
                  {{-- @foreach ($students as $user) --}}
                  <tr>
                    <td>
                      {{-- @if($user->photo)
                        @if(Str::contains($user->photo, 'https://'))
                        <img src="{{$user->photo}}" alt="profile picture" class="rounded-circle p-1" height="75px" width="80px"></td>
                        @else
                        <img src="{{asset($user->photo)}}" alt="{{$user->name}}" class="rounded-circle p-1" height="75px" width="80px">
                        @endif
                      @else
                      <img src="{{asset('storage/images/profile-default.jpg'.$user->photo)}}" alt="{{$user->name}}" class="rounded-circle p-1" height="75px" width="80px">
                      
                      @endif --}}
                    </td> 
                    {{-- <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->phone}}</td> --}}
                    <td> 
                      {{-- <a href="{{route('user.profile', ['id'=>$user->id])}}" title="profile" class="btn btn-sm"><i class="fa-solid fa-eye"></i></a> --}}
                      <i class="fa-solid fa-messages"></i>
                    </td>
                  {{-- @endforeach --}}
                </tbody>
              </table>
            </div>
          </div>
      </div>
      {{-- <div class="d-flex justify-content-end">{{$role->links()}}</div> --}}
  
  </div>

@endsection

