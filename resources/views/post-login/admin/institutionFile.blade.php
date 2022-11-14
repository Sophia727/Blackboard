@extends('template.user_homepage')
@section('content')

<div class="col-8">
    <h1>
      <strong>Institution File</strong>
    </h1>
  </div>
<div class="row">
    

    <div class="col-xl-4">
        <div class="card bg-c-greenish order-card">
            <a role="button"
            href="{{route('add.faculty')}}">
                <div class="card-block">
                    <h3 class="m-b-20"> 
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                      </svg>
                      Add Faculty</h3>
                </div>
            </a>
        </div>
    </div>
    <div class="col-xl-4">
        <div class="card bg-c-greenish order-card">
            <a role="button"
            href="{{route('add.speciality')}}">
                <div class="card-block">
                    <h3 class="m-b-20">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                          </svg>
                          Add Speciality</h3>
                </div>
            </a>
        </div>
    </div>
    
    <div class="col-xl-4">
        <div class="card bg-c-greenish order-card">
            <a role="button"
            href="{{route('add.subject')}}">
                <div class="card-block">
                    <h3 class="m-b-20">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                          </svg>
                          Add Subject</h3>
                </div>
            </a>
        </div>
    </div>
    <hr>
</div>
<div class="row">
    <section style="padding: 0 20px;">
  @foreach ($faculty as $faculty)
  
    <div class="row mb-5">
    <div class="col-3 ">
        @if($faculty->logo)
                      @if(Str::contains($faculty->logo, 'https://'))
                      <img src="{{$faculty->logo}}" alt="{{$faculty->name}} logo " class="  p-1 mt-3" height="120px" width="120px">
                      @else
                      <img src="{{asset('images/logos'.$faculty->logo)}}" alt="{{$faculty->name}} logo " class=" p-1 mt-3" height="120px" width="120px">
                      @endif
                    @else
                    <img src="{{asset('images/dummy-image.jpg')}}" alt="{{$faculty->name}} logo "s class=" p-1 mt-3" height="120px" width="120px">
                    
                    @endif
        {{-- <img src="{{$faculty->logo}}" class="card-img-left" alt="{{$faculty->name}} logo "> --}}
    </div>
    <div class="col text-left">
            <h5 class="card-title mt-3">{{$faculty->name}}</h5>

            
                <div class="row">
                     <div class="col-sm-6 mt-2 text-dark">
                        <p class="card-text">Rector: {{$faculty->rector->name}}</p>
                    </div>
                        <div class="col-sm-3">
                        <img src="{{$faculty->rector->photo}}" style="width:5rem; height:5rem; border-radius:2%;" alt="author's picture">
                    </div> 
                    <div class="col-sm-3">
                        <a href="{{route('speciality.list',['view'=> 'post-login.admin.lists.specialityList', 'id'=>$faculty->id])}}" class="btn btn-outline-secondary">See all specialities</a>
                    </div>
                </div>
            </p>
    </div>
    {{-- <div class="col-2 mt-4">
    </div> --}}
    </div>
 

  @endforeach
</section>
</div>


@endsection