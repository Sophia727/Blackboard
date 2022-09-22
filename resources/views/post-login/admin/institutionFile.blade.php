@extends('template.user_homepage')
@section('content')


<h1>Institution file</h1>
<div class="row">
    
    <div class="col-md-4 col-xl-4">
        <div class="card bg-c-greenish order-card">
            <a role="button"
            href="{{route('add.faculty')}}">
                <div class="card-block">
                    <h3 class="m-b-20">Edit: About us</h3>
                </div>
            </a>
        </div>
    </div>
    <div class="col-md-4 col-xl-4">
        <div class="card bg-c-greenish order-card">
            <a role="button"
            href="{{route('add.faculty')}}">
                <div class="card-block">
                    <h3 class="m-b-20">Add Faculty</h3>
                </div>
            </a>
        </div>
    </div>
    <div class="col-md-4 col-xl-4">
        <div class="card bg-c-greenish order-card">
            <a role="button"
            href="{{route('add.speciality')}}">
                <div class="card-block">
                    <h3 class="m-b-20">Add Speciality</h3>
                </div>
            </a>
        </div>
    </div>
    
    <div class="col-md-4 col-xl-4">
        <div class="card bg-c-greenish order-card">
            <a role="button"
            href="{{route('add.subject')}}">
                <div class="card-block">
                    <h3 class="m-b-20">Add Subject</h3>
                </div>
            </a>
        </div>
    </div>
    
</div>

@endsection