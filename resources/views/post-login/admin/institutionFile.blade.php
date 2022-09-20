@extends('template.user_homepage')
@section('content')


<h1>Institution file</h1>
<div class="row">
    
    <div class="col-md-4 col-xl-3">
        <div class="card bg-c-yellow order-card">
            <a data-bs-toggle="collapse" role="button" aria-expanded="false" 
            href="#" 
            aria-controls="posts">
                <div class="card-block">
                    <h3 class="m-b-20">Edit info</h3>
                </div>
            </a>
        </div>
    </div>

    <div class="col-md-4 col-xl-4">
        <div class="card bg-c-darkblue order-card">
            <a role="button"
            href="{{route('add.faculty')}}">
                <div class="card-block">
                    <h3 class="m-b-20">Add Faculty</h3>
                </div>
            </a>
        </div>
    </div>
    <div class="col-md-4 col-xl-3">
        <div class="card bg-c-yellow order-card">
            <a data-bs-toggle="collapse" role="button" aria-expanded="false" 
            href="{{route('add.subject')}}" 
            aria-controls="posts">
                <div class="card-block">
                    <h3 class="m-b-20">Add subject</h3>
                </div>
            </a>
        </div>
    </div>
    <div class="col-md-4 col-xl-4">
        <div class="card bg-c-purple order-card">
            <a role="button"
            href="{{route('add.subject')}}">
                <div class="card-block">
                    <h3 class="m-b-20">Add subject</h3>
                </div>
            </a>
        </div>
    </div>
</div>

@endsection