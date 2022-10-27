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
                <h4 class="card-title text-warning">Create a new Speciality</h4>
                <h6 class="text-muted">Add a new speciality to database</h6>
            </div>
            <div class="card-body">
                    <form action="{{route('store.speciality')}}" method="post" enctype="multipart/form-data">
                        @csrf
                <div class="row m-2">
                <div class="col">   
                <div class="form-group">
                    <h6>Speciality Name</h6>
                    <input type="text" class="form-control  @error('name')is-invalid @enderror" name="name" placeholder="Name..." value="{{old('name')}}" >
                    @error('name')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
            </div>
            </div>  
           
            <div class="row m-2">
                <div class="col">
                    <div class="form-group">
                        <h6>Choose assigned faculties: </h6>
                        <select name="faculty_id" class="form-select" aria-label="multiple select example" required>
                            <option selected >Faculty...</option>
                            @foreach ($faculty as $faculty)  
                                <div class="form-check" >
                                    <option value="{{$faculty->id}}">{{$faculty->name}}</option>
                                </div>  
                            @endforeach
                          </select>  
                          
                    </div>
                </div>
            </div>
            
           
        <div class="row"> 
            <div class="d-grid col-sm-8">            
                <button type="submit" class="btn btn-md btn-secondary m-4"> Create Faculty</button>
            </div>
            <div class="col-sm-4">    
                <a role="button" class="btn btn-outline-secondary m-4"
                href="{{route('add.subject')}}">                    
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus-circle">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                    </svg>
                    Add Subject
                </a>
            </div>
            
        </div> 
                     
    </div>
</div> 
    </div>
    </form>

    </div>
    </div>
</div>

@endsection