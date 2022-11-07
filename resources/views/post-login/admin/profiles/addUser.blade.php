@extends('template.user_homepage')
@section('content')


<div class="row">
    @if(session('status'))
    <div class="alert alert--success">
      {{session('status')}}
    </div>
  @endif
<div class="card">
<div class="card-header">
    <h4 class="card-title">Create a new user</h4>
    <h6 class="text-muted">Add a new user to the database</h6>
</div>
<div class="card-body">
<form action="{{route('store.user')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row m-2">
        <div class="col">
            <div class="form-group">
                <h6>Full Name</h6>
                <input type="text" class="form-control  @error('name')is-invalid @enderror" name="name" placeholder="Full name" value="{{old('name')}}" >
                @error('name')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
        </div>
        
    </div>
    <div class="row m-2">
        
        <div class="col">
            <div class="form-group ">
                <h6>Email</h6>
                <input type="email" name="email" class="form-control  @error('email')is-invalid @enderror" placeholder="exemple@email.com" value="{{old('email')}}">
            
                @error('email')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
        </div>
        
        <div class="col">
            <div class="form-group">
                <h6>Phone number</h6>
                <input type="tel" class="form-control  @error('phone')is-invalid @enderror" name="phone" placeholder="+212" value="{{old('phone')}}" >
                @error('phone')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
        </div>
    </div>
    <div class="row m-2">
        <div class="col">
            <div class="form-group">
                <h6>Address</h6>
                <input type="text" class="form-control  @error('address')is-invalid @enderror" name="address" placeholder="Full address" value="{{old('address')}}" >
                @error('address')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
        </div>
    </div>
    <div class="row m-2">
        <div class="col">
            <div class="form-check form-check-inline">
                <h6 style="margin:0 8rem 1rem 0;">Choose profile </h6>
                <div style="margin: 0 45px">
                    <input class="form-check-input" type="radio" name="admin" role="admin" id="admin">
                    <label class="form-check-label" for="inlineCheckbox1">Admin</label>   
                </div>
                <div style="margin: 0 45px;">
                    <input class="form-check-input" type="radio" name="professor" role="professor" id="professor">
                    <label class="form-check-label" for="inlineCheckbox2">Professor</label>
                </div>
                <div style="margin: 0 45px;">
                    <input class="form-check-input" type="radio" name="parent" role="parent" id="parent">
                    <label class="form-check-label" for="inlineCheckbox1">Parent</label>    
                </div>
                <div style="margin: 0 45px;">
                    <input class="form-check-input" type="radio" name="student" role="student" 
                    id="rolestudent" data-bs-toggle="collapse" data-bs-target="#specialitystudent" aria-expanded="false"
                    >
                    <label class="form-check-label" for="inlineCheckbox1">Student</label>
                </div>
            </div>
        </div>
    </div>
    <div class="row m-2 collapse" id="specialitystudent">
        <h6 style="margin:0 2rem 1rem 0; padding-top:0.5rem">Assign speciality</h6>
        <select name="speciality_id" class="form-select @error('classroom')is-invalid @enderror" aria-label="multiple select example">     
            <option selected value>Speciality...</option>
            @foreach ($speciality as $spec)  
                <div class="form-check">
                    <option value="{{$spec->id}}">{{$spec->name}}</option>
                </div>  
            @endforeach
        </select>     
    </div>
    <div class="row m-2">
        <div class="form-group">
            <div class="input-group mb-3">
                <h6 style="margin:0 2rem 1rem 0; padding-top:0.5rem">Profile Picture</h6>
                <input type="file" class="form-control" name="photo" id="inputGroupFile01" value="{{old('photo')}}">
                @error('photo')
                    <div class="alert alert-danger">
                    {{$message}}
                    </div>
                @enderror
            </div>
        </div>
        
    </div>
    <div class="d-grid gap-2 col-6 mx-auto">
    <button class="btn btn-md btn-outline-secondary m-4" type="submit"> Create user</button>
    </div>
</form>
</div>
</div>
</div>


@endsection