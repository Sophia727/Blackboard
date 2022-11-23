@extends('template.user_homepage')
@section('content')
<div class="row">
    {{-- partie message --}}
    @if(session('status'))
    <x-alert type="success" :message="session('status')" class="mb-4"/>   
    @endif
    @if(session('error'))
    <x-alert type="danger" :message="session('error')" class="mb-4"/>   
    @endif
</div>

<div class="row myProfile_head">
    <h2>{{$user->name}}</h2>
    <div class="user_pic">
        @if($user->photo)
          @if(Str::contains($user->photo, 'https://'))
          <img src="{{$user->photo}}"  alt="Profile picture"  width="100%" style="border-radius: 60px">
          @else
          <img src="{{asset($user->photo)}}"  alt="Profile picture"  width="100%" style="border-radius: 60px">
          @endif
        @else
        <img src="{{asset('images/profile-default.jpeg')}}"  alt="Profile picture"  width="100%" style="border-radius: 60px">
                    
        @endif
        {{-- <div class="text-end modify-pp">
        <i class="fa-sharp fa-solid fa-pen text-success"></i>
    </div> --}}
        {{-- <img src="{{asset($user->photo)}}" alt="Profile picture"  width="100%" style="border-radius: 60px"> --}}
    </div>
</div>
<div class="row myProfile_body">
    <h3>Profile</h3>
    
    <div class="card-body mb-5">
        @if (Auth::user()->role == 'admin')
        <form action="{{route('update.profile', ['id'=>$user->id])}}" method="post">
            @csrf
            @method('put')    
    
        @elseif (Auth::user()->role == 'professor')
        <form action="{{route('updateProf.profile',['id'=>$user->id])}}" method="post">
            @csrf
            @method('put')   
        @elseif (Auth::user()->role == 'student')
        <form action="{{route('updateStu.profile', ['id'=>$user->id])}}" method="post">
            @csrf
            @method('put')   
        @elseif (Auth::user()->role == 'parent')
        <form action="{{route('updatePar.profile', ['id'=>$user->id])}}" method="post">
            @csrf
            @method('put')   
        @endif
        <div class="text-right mb-3 " style="margin-right: 91px">                
            <button type="submit" class="btn btn-primary">Update  <i class="bi bi-check"></i></button>
        </div>
        
        <div class="row mb-3">
            <div class="col-sm-2">
                <input type="hidden" value="{{$user->id}}">
                <h6 class="mt-2">Full Name</h6>
            </div>
            <div class="col-sm-9 text-secondary">
                <input type="text" name="name" class="form-control" value="{{$user->name}}" disabled >

                @error('name')
                <div class="alert alert-danger">
                {{$message}} 
                </div>
                @enderror

            </div>
        </div>
        <div class="row mb-3">
            <div class="col-sm-2">
                <h6 class="mt-2">Email</h6>
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
            <div class="col-sm-2">
                <h6 class="mt-2">Mobile</h6>
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
        
        
        @if(Auth::User()->role==='student')
        <div class="row mb-3">
            <div class="col-sm-2">
                <h6 class="mt-2">Speciality</h6>
            </div>
            <div class="col-sm-9 text-secondary">
                <input type="text" class="form-control" name="speciality_id" 
                @if (Auth::User()->speciality_id!='')
                    value="{{$user->speciality->name}}" disabled
                @else 
                    value="No Speciality assigned" disabled
                @endif 
                >
                @error('speciality_id')
                <div class="alert alert-danger">
                {{$message}} 
                </div>
                @enderror
            </div>
        </div>
        @endif
        <div class="row mt-4">
            <div class="d-grid gap-2 col-6 mx-auto">
                {{-- <a href="" type="submit" class="btn btn-primary px-4" class="btn btn-success btn-sm" title="Save Changes">Save Changes</a> --}}
                <button type="submit" class="btn btn-primary">Update  <i class="bi bi-check"></i></button>

            </div>
        </div>
    </form>
    </div>
    <div class="row myProfile_body">
    <h4>Change password</h4>
    <div class="card-body mb-5">

        <form action="{{route('changePassword', ['id'=>$user->id])}}" method="post">
            @csrf
            @method('put')    
    
            <div class="row mb-3">
                <div class="col-sm-2">
                    <h6 class="mt-2">Password</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                    <input type="password" class="form-control 
                    @error('password') is-invalid @enderror" 
                    name="password" autocomplete="current-password">
            
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            
            <div class="row mb-3">
                <div class="col-sm-2">
                    <label for="password" class="text-md-right">Confirm Password</label>
                </div>
                <div class="col-lg-9 text-secondary">
                    <input id="password" type="password" class="form-control 
                    @error('password') is-invalid @enderror" 
                    name="password_confirmation" autocomplete="current-password">
                </div>
            </div>
            <div class="row mt-4">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button type="submit" class="btn btn-primary">Update  <i class="bi bi-check"></i></button>
    
                </div>
            </div>
           
        </form>
    </div>
    </div>
</div>
</div>
@endsection