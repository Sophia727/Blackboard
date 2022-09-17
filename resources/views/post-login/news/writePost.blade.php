@extends('template.user_homepage')
@section('content')
{{-- <head>
<link rel="stylesheet" href="{{asset('css/post-login/dashboard.css')}}">  
</head>--}}

        <h1>Write a post</h1>
        
<div class="row">
    <div class="col">

    </div>
    <div class="col-6">
        {{-- insert code here --}}
        <form action="{{route('store.post')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row my-2">
                <div class="col">
                    <div class="form-group">
                    <input type="text" class="form-control @error('title')is-invalid @enderror" name="title" placeholder="Post Title" value="{{old('title')}}" >
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
                    <textarea name="description" class="form-control" placeholder="what's on your mind?" cols="30" rows="10">{{old('description')}}</textarea>
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
                <button class="btn btn-md btn-secondary"> Save</button>
        </form>
    </div>
    <div class="col">

    </div>

</div>

@endsection

