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
                <h4 class="card-title">Create a new Speciality</h4>
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
                        <select name="faculty" class="form-select" required aria-label="multiple select example">
                            <option selected >Faculty...</option>
                            @foreach ($faculty as $faculty)  
                                <div class="form-check">
                                    <option value="{{$faculty->name}}">{{$faculty->name}}</option>
                                </div>  
                            @endforeach
                          </select>  
                          
                    </div>
                </div>
            </div>
            
            {{-- <div class="collapse multi-collapse" id="subject">
                <div class="card card-body">
                    <div class="row m-2">
                        <div class="col">
                            <div class="form-group">
                                <h6>Subject Name</h6>
                                <input type="text" class="form-control  @error('subject name')is-invalid @enderror" name="subject_name" placeholder="Biology" value="{{old('subject_name')}}" >
                                @error('subject_name')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        
                    </div>
                    <div class="row m-2">
                        
                        <div class="col">
                            <div class="form-group ">
                                <h6>Select professor:</h6>
                                <select class="form-select" name="professor_id" aria-label="multiple select example">
                                    
                                    <option selected>Professors...</option>
                                    @foreach ($role as $users)  
                                        <div class="form-check @error('professor')is-invalid @enderror">
                                            <option value="{{$users->name}}" name="professor">{{$users->name}}</option>
                                        </div>  
                                    @endforeach
                                  
                                </select>
                                @error('professor')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        <div class="row g-2"> 
            <div class="d-grid col-sm-8">            
                <button type="submit" class="btn btn-md btn-secondary m-4"> Create Faculty</button>
            </div>
            <div class="col-sm">    
                <a data-bs-toggle="collapse" role="button" class="btn btn-md btn-outline-secondary m-4" aria-expanded="false" 
                    href="#subject" 
                    aria-controls="subject">   Create Subject
                </a>     
                {{-- <button type="button" href="{{route('add.subject')}}" class="btn btn-md btn-outline-secondary m-4"> Create Subject</button> --}}
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