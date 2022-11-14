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
                        <h6>Choose assigned faculty: </h6>
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
            <div class="d-grid gap-2 col-6 mx-auto">            
                <button type="submit" class="btn btn-md btn-secondary m-4"> Create Speciality</button>
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