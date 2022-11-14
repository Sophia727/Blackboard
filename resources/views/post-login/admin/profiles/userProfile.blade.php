@extends('template.user_homepage')
@section('content')
<div class="container">
    <div class="row">
        {{-- partie message --}}
        @if(session('status'))
        <x-alert type="success" :message="session('status')" class="mb-4"/>   
        @endif
        @if(session('error'))
        <x-alert type="danger" :message="session('error')" class="mb-4"/>   
        @endif
    </div>
    <div class="main-body">
        
        <div class="row">

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            @if($user->photo)
                            @if(Str::contains($user->photo, 'https://'))
                            <img src="{{$user->photo}}" alt="profile picture" class="rounded-circle p-1" width="110px" height="110px">
                            @else
                            <img src="{{asset($user->photo)}}" alt="{{$user->name}}" class="rounded-circle p-1" width="110px" height="110px">
                            @endif
                          @else
                          <img src="{{asset('images/profile-default.jpeg')}}" alt="{{$user->name}} profile picture" class="rounded-circle p-1" width="110px" height="110px">
                          
                          @endif
                            <div class="mt-3">
                                <h4>{{$user->name}}</h4>
                                <p class="text-secondary mb-1">{{$user->role}}</p>
                                <p class="text-muted font-size-sm">{{$user->address}}</p>
                                <button href="#" class="btn btn-outline-primary">Message</button>
                                @if ($user->role == "student")
                                <a class="btn btn-outline-warning" href={{route('student.grades',['view'=>'post-login.users.professor.studentGrades','id'=>$user->id] )}}>Grades</a>
                                @endif
                            </div>
                        </div>
                        <hr class="my-4">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0">Registration Number:</h6>
                                <span class="text-secondary">{{$user->registration_num}}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0">Joined since:</h6>
                                <span class="text-secondary">{{$user->created_at->format('d/m/Y')}}</span>
                            </li>
                            @if ($user->last_sign_in_at!='')
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0">Last login:</h6>
                                    <span class="text-secondary">{{$user->last_sign_in_at->format('d/m/Y h:m')}}</span>
                                </li>
                            @else
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0">Last login:</h6>
                                <span class="text-secondary">{{$user->created_at->format('d/m/Y h:m')}}</span>
                            </li>
                            @endif
                            
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('updateUP.profile',['id'=>$user->id])}}" method="post">
                        @csrf
                        @method('put')    
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <input type="hidden" value="{{$user->id}}">
                                <h6 class="mb-0">Full Name</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" name="name" class="form-control" value="{{$user->name}}">
                                @error('name')
                                <div class="alert alert-danger">
                                {{$message}} 
                                </div>
                                @enderror
                            
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control" name="email" value="{{$user->email}}">
                                @error('email')
                                <div class="alert alert-danger">
                                {{$message}} 
                                </div>
                            @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Mobile</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control" name="phone" value="{{$user->phone}}">
                                @error('phone')
                                <div class="alert alert-danger">
                                {{$message}} 
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Address</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control" name="address" value="{{$user->address}}">
                                @error('address')
                                <div class="alert alert-danger">
                                {{$message}} 
                                </div>
                            @enderror
                            </div>
                        </div>
                        @if ($user->role == 'student')
                        @if ($user->speciality_id != '')
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Speciality</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control" name="speciality_id" value="{{$user->speciality->name}} " disabled>
                            </div>
                        </div>
                        @else
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Speciality</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <select name="speciality_id" class="form-select @error('speciality_id')is-invalid @enderror" aria-label="multiple select example">     
                                    <option selected value>Speciality...</option>
                                    @foreach ($specialities as $spec)  
                                        <div class="form-check">
                                            <option value="{{$spec->id}}">{{$spec->name}}</option>
                                        </div>  
                                    @endforeach
                                </select>    
                            </div>
                        </div>
                        @endif
                        @endif
                        
                        <div class="row">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-9 text-secondary">
                                <button type="submit" class="btn btn-md btn-primary">Update  <i class="bi bi-pencil"></i></button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
                <hr class="my-4">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                {{-- <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Account status:</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" onchange="if(confirm('Are you sure to change the status of this user?')){
                                              document.getElementById('activate-{{$user->id}}').submit();
                                              }" type="checkbox" @if ($user->activate)
                                                checked
                                              @endif 
                                              name="activate" class="my-4"  role="switch" id="activate"> <p class="ml-5"> Active</p>
                                        </div>
                                          <form id="activate-{{$user->id}}" action="{{route('user.activate',['id'=>$user->id])}}" method="post">
                                            @csrf 
                                            @method('put')
                                          </form>                                    
                                    </div>
                                </div> --}}
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Last update:</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <span class="text-secondary">{{$user->updated_at}}</span>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Delete account?</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <a href="#" onclick="if(confirm('Are you sure you want to delete this user\'s account?')){
                                            document.getElementById('user-{{$user->id}}').submit(); }"
                                             title="Delete">
                                             <i class="fa-solid fa-lg text-danger fa-trash"></i>
                                          
                                            </a>
                                            <form id="user-{{$user->id}}" action="{{route('destroy.profile', ['id'=>$user->id])}}" method="POST">
                                            @csrf
                                            @method('delete')
                                            </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- @endforeach --}}
@endsection