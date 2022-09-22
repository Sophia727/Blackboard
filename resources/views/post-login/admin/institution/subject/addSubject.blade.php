@extends('template.user_homepage')
@section('content')


<div class="row">
    <div class="container">
        @if(session('status'))
        <div class="alert alert--success">
          {{session('status')}}
        </div>
      @endif
    <div class="card">
        <div class="card-header">
            <h4 class="card-title text-warning">Create a new subject</h4>
            <h6 class="text-muted">Add a new subject to database</h6>
        </div>
    <div class="card-body">
    <form action="{{route('store.subject')}}" method="post">
        @csrf
        <div class="row m-2">
            <div class="col">
                <div class="form-group">
                    <h6>Subject Name</h6>
                    <input type="text" class="form-control  @error('name')is-invalid @enderror" name="name" placeholder="Biology" value="{{old('name')}}" >
                    @error('name')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
            </div>
            
        </div>
        <div class="row m-2">
            
            <div class="col">
                <div class="form-group ">
                    <h6>Select professor:</h6>
                    <select class="form-select" name="professor" aria-label="multiple select example">
                        
                        <option selected>Professors...</option>
                        @foreach ($role as $user)  
                            <div class="form-check">
                                <option value="{{$user->name}}" name="professor">{{$user->name}}</option>
                            </div>  
                        @endforeach
                      
                    </select>
                </div>
            </div>
            
        </div>
        
        <div class="row m-2">
            <div class="col">
                <div class="form-group">
                    <h6>Choose assigned Speciality: </h6>
                    <select name="speciality" class="form-select @error('classroom')is-invalid @enderror" aria-label="multiple select example">
                       
                        <option selected >Speciality...</option>
                        @foreach ($speciality as $spec)  
                            <div class="form-check">
                                <option value="{{$spec->id}}">{{$spec->name}}</option>
                            </div>  
                        @endforeach
                      </select>  
                      @error('speciality')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror                
                </div>
            </div>
        </div>
        <div class="row m-2">
            <div class="col">
                <div class="form-group">
                    <h6>Assign to classroom:</h6>
                    <input type="text" class="form-control  @error('classroom')is-invalid @enderror" name="classroom" placeholder="FS-8" value="{{old('classroom')}}" >
                    @error('classroom')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
            </div>            
        </div>
        <div class="row m-2">
            <div class="col">
                    <h6>Select semesters:</h6>
                <div class="form-group" >
                    <div class="row">
                        <div class="col">
                            <span>1st year:</span> 
                        </div>
                        <div class="col">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                <label class="form-check-label" name="semester[]" value="s1" for="inlineCheckbox1">S-1</label>                     
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                <label class="form-check-label" name="semester[]"value="s2" for="inlineCheckbox2">S-2</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <span>2nd year:</span>
                        </div>
                        <div class="col">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                <label class="form-check-label" name="semester[]" value="s3" for="inlineCheckbox1">S-3</label>                     
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                <label class="form-check-label" name="semester[]" value="s4" for="inlineCheckbox2">S-4</label>
                            </div>
                        </div>
                    </div>
            
                
                    <div class="row">
                        <div class="col">
                            <span>3rd year:</span>
                        </div>
                        <div class="col">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                <label class="form-check-label"name="semester[]" value="s5" for="inlineCheckbox2">S-5</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                <label class="form-check-label" name="semester[]" value="s6" for="inlineCheckbox2">S-6</label>
                            </div>
                        </div>
                    </div>
                        
                    <div class="row">
                        <div class="col">
                            <span>4nd year:</span>
                        </div>
                        <div class="col">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                <label class="form-check-label"name="semester[]" value="s7" for="inlineCheckbox2">S-7</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                <label class="form-check-label"name="semester[]" value="s8" for="inlineCheckbox2">S-8</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <span>5th year:</span>
                        </div>
                        <div class="col">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                <label class="form-check-label"name="semester[]" value="s9" for="inlineCheckbox2">S-9</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                <label class="form-check-label"name="semester[]" value="s10" for="inlineCheckbox2">S-10</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <span>6th year:</span>
                        </div>
                        <div class="col">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                            <label class="form-check-label"name="semester[]" value="s11" for="inlineCheckbox2">S-11</label>
                        </div>
                        </div>
                        <div class="col">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                            <label class="form-check-label" name="semester[]" value="s12" for="inlineCheckbox2">S-12</label>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <span>7th year:</span>
                        </div>
                        <div class="col">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                <label class="form-check-label" name="semester[]" value="s13"for="inlineCheckbox2">S-13</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                <label class="form-check-label" name="semester[]" value="s14"for="inlineCheckbox2">S-14</label>
                            </div>
                        </div>
                    </div>   
                    {{-- @error('semester')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror    --}}
                </div>
            </div>            
        </div>

        <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-md btn-outline-secondary m-4" type="submit"> Create subject</button>
        </div>
    </form>
    </div>
    </div>
    </div>
</div>

@endsection