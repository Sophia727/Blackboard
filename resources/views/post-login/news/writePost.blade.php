@extends('template.user_homepage')
@section('content')

<div class="row">
    {{-- <div class="col-6"> --}}
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">New Article</h4>
                <h6 class="text-muted">What's on your mind?</h6>
            </div>
            <div class="card-body">
        {{-- insert code here --}}
        <form action="{{route('store.post')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row my-2">
                <div class="col">
                    <div class="form-group">
                        <label for="title">Article Title</label>
                    <input type="text" class="form-control @error('title')is-invalid @enderror" name="title" placeholder="Give your article a name" value="{{old('title')}}" >
                    @error('title')
                        <div class="alert alert-danger">
                        {{$message}} 
                        </div>
                    @enderror
                    </div>
                </div>
                </div>
    
                <div class="row my-2">
                <div class="col">
                    <div class="form-group ">
                        <label for="description">Description</label>
                    <textarea name="description" class="form-control" placeholder="Start typing.." cols="30" rows="10">{{old('description')}}</textarea>
                    </div>
                    @error('description')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                </div>
    
                <div class="row my-2">
                <div class="col">
                    <div class="form-group">
                    <input type="file" class="form-control" name="photo" id="title" placeholder="Post image" value="{{old('photo')}}" >
                    @error('photo')
                        <div class="alert alert-danger">
                        {{$message}}
                        </div>
                    @enderror
                    </div>
                </div>
                </div>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-md btn-outline-secondary m-4" type="submit"> Publish!</button>
                    </div>
                </form>
            </div>
        </div>
    {{-- </div> --}}


</div>

@endsection

