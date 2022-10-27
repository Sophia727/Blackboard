@extends('template.user_homepage')
@section('content')


<div class="row">
    <div class="container">
        @if(session('message'))
            <div class="alert alert--success">
            {{session('message')}}
            </div>
        @endif
        <div class="card">
            <div class="card-header">
                <h4 class="card-title text-warning">Create a new faculty</h4>
                <h6 class="text-muted">Add a new faculty to database</h6>
            </div>
            <div class="card-body">
            <form action="{{route('store.faculty')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row m-2">
                <div class="col">   
                <div class="form-group">
                    <h6>Faculty Name</h6>
                    <input type="text" class="form-control  @error('name')is-invalid @enderror" name="name" placeholder="Name your faculty" value="{{old('name')}}" >
                    @error('name')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
            </div>
            </div>  
            <div class="row m-2">
            <div class="col">
                    <h6>Select Rector:</h6>
                    <select class="form-select" required name="rector_id">
                        <option selected value>Select...</option>
                        @foreach ($role as $user)  
                            <div class="form-check">
                                <option value="{{$user->id}}">{{$user->name}}</option>
                            </div>  
                        @endforeach                    
                    </select>                    
            </div>            
            </div>
    
            <div class="row m-2">
            <div class="form-group">
                <div class="input-group mb-3">
                    <h6 >Faculty Logo or Badge</h6>
                    <input type="file" class="form-control" name="logo" id="inputGroupFile01" value="{{old('logo')}}">
                    
                </div>
            </div>            
            </div>
        <div class="form-group">
            <div class="d-grid gap-2 col-6 mx-auto">            
            <button type="submit" class="btn btn-md btn-secondary m-4"> Create Faculty</button>
        </div>
    </div>

    </form>

    </div>
    </div>
</div>

@endsection