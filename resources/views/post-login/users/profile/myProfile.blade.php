@extends('template.user_homepage')
@section('content')
<div class="row myProfile_head">
    <h2>{{$user->name}}</h2>
    <div class="user_pic">
        user pic goes here
    </div>
</div>
<div class="row myProfile_body">
    <h3>Profile</h3><div>
        <div class="text-right">                
            <button class="btn btn-md btn-primary">Update  <i class="bi bi-pencil"></i></button>
        </div>
    </div>
    <div class="card-body">
        {{-- <form action="{{route('update.profile', ['user'=>$user->id])}}" method="post"> --}}
        <form action="" method="post">
        @csrf
        @method('put')    
        <div class="row mb-3">
            <div class="col-sm-3">
                <input type="hidden" value="{{$user->id}}">
                <h6 class="mb-0">Full Name</h6>
            </div>
            <div class="col-sm-9 text-secondary">
                <input type="text" name="name" class="form-control" value="{{$user->name}}" disabled>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-sm-3">
                <h6 class="mb-0">Email</h6>
            </div>
            <div class="col-sm-9 text-secondary">
                {{-- <input type="text" class="form-control" name="email" value="{{$user->email}}"> --}}
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-sm-3">
                <h6 class="mb-0">Mobile</h6>
            </div>
            <div class="col-sm-9 text-secondary">
                {{-- <input type="text" class="form-control" name="phone" value="{{$user->phone}}"> --}}
            </div>
        </div>
        
        <div class="row mb-3">
            <div class="col-sm-3">
                <h6 class="mb-0">Address</h6>
            </div>
            <div class="col-sm-9 text-secondary">
                {{-- <input type="text" class="form-control" name="address" value="{{$user->address}}"> --}}
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-9 text-secondary">
                {{-- <a href="{{route('update.profile', ['user'=>$user->id])}}" type="submit" class="btn btn-primary px-4" class="btn btn-success btn-sm" title="Save Changes">Save Changes</a> --}}
                <button class="btn btn-md btn-primary">Update  <i class="bi bi-pencil"></i></button>

            </div>
        </div>
    </form>
    </div>
</div>
</div>
@endsection