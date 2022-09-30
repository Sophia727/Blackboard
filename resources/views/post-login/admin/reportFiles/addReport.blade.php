@extends('template.user_homepage')
@section('content')

<div class="row">
        <div class="card">
            <div class="card-header">
                <h4 class="card-name">New Report</h4>
            </div>
            <div class="card-body">
        <form action="{{route('store.report')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row my-2">
                <div class="col-7">
                    <div class="form-group">
                        <label for="name">File Name</label>                    
                    <input type="text" class="form-control @error('name')is-invalid @enderror" name="name" placeholder="Name your file" value="{{old('name')}}" >
                    @error('name')
                        <div class="alert alert-danger">
                        {{$message}} 
                        </div>
                    @enderror
                    </div>
                </div>
                
                <div class="col-5">
                    <div class="form-group ">
                        <label for="name">Tag</label>       
                        <input name="tag" class="form-control" placeholder="Administration? Faculty?" cols="30" rows="10" value="{{old('tag')}}">
                    </div>
                    @error('tag')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                </div>
    
                <div class="row my-2">
                <div class="col">
                    <div class="form-group">
                    <input type="file" class="form-control" name="file" id="name" placeholder="Upload File" value="{{old('file')}}">
                    @error('file')
                        <div class="alert alert-danger">
                        {{$message}}
                        </div>
                    @enderror
                    </div>
                </div>
                </div>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-md btn-outline-secondary m-4" type="submit"> Upload</button>
                    </div>
                </form>
            </div>
        </div>


</div>

@endsection

