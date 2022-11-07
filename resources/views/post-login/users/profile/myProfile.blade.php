@extends('template.user_homepage')
@section('content')
<div class="row myProfile_head">
    <h2>{{$user->name}}</h2>
    <div class="user_pic">
        <img src="{{asset($user->photo)}}" alt="Profile picture"  width="100%" style="border-radius: 60px">
    </div>
</div>
<div class="row myProfile_body">
    <h3>Profile</h3>
    
    <div class="card-body">
        <form action="{{route('update.profile', ['user'=>$user->id])}}" method="post">
        @csrf
        @method('put')    
        <div class="text-right mb-3 " style="margin-right: 91px">                
            <button type="submit" class="btn btn-primary">Update  <i class="bi bi-check"></i></button>
        </div>
        
        <div class="row mb-3">
            <div class="col-sm-2">
                <input type="hidden" value="{{$user->id}}">
                <h6 class="mb-0">Full Name</h6>
            </div>
            <div class="col-sm-9 text-secondary">
                <input type="text" name="name" class="form-control" value="{{$user->name}}" disabled>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-sm-2">
                <h6 class="mb-0">Email</h6>
            </div>
            <div class="col-sm-9 text-secondary">
                <input type="text" class="form-control" name="email" value="{{$user->email}}">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-sm-2">
                <h6 class="mb-0">Mobile</h6>
            </div>
            <div class="col-sm-9 text-secondary">
                <input type="text" class="form-control" name="phone" value="{{$user->phone}}">
            </div>
        </div>
        
        <div class="row mb-3">
            <div class="col-sm-2">
                <h6 class="mb-0">Address</h6>
            </div>
            <div class="col-sm-9 text-secondary">
                <input type="text" class="form-control" name="address" value="{{$user->address}}">
            </div>
        </div>
        @if(Auth::User()->role==='student')
        <div class="row mb-3">
            <div class="col-sm-2">
                <h6 class="mb-0">Speciality</h6>
            </div>
            <div class="col-sm-9 text-secondary">
                <input type="text" class="form-control" name="speciality" @if (Auth::User()->speciality_id!='')
                    value="{{$user->spreciality_id->name}}"
                    @else value="No Speciality assigned" disabled
                @endif >
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
</div>
</div>
@endsection