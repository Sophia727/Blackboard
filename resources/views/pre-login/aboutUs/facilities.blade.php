@extends('template.homepage')

@section('content')
    <div class="row">
        <div class="container">
        <H2>Our university facilities and students' life in campus</H2>

        <hr>
        <legend>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse consequuntur doloremque cupiditate quo vitae excepturi repellat alias, error nesciunt dolores deserunt culpa beatae est fugiat obcaecati labore ex facilis blanditiis!</legend>
        <hr>
    </div>
    </div>
    <div class="row">
        <div class="container">
        <div id="carouselslide" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item">
                <img src="{{asset('images/fac-library.jpg')}}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item active">
                <img src="{{asset('images/fac-cafeteria.jpg')}}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{asset('images/fac-co-working.jpg')}}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{asset('images/fac-open-air.jpg')}}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{asset('images/fac-swimming-pool.jpg')}}" class="d-block w-100" alt="...">
              </div>
              
              <div class="carousel-item">
                <img src="{{asset('images/field.jpg')}}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{asset('images/fac-gym.jpg')}}" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselslide" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselslide" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
    </div>
    <hr>
    <div class="row" style="background-color: rgb(160, 158, 158)">
        <div class="container">
            <h3>More about student life</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum excepturi et doloremque ea! Quisquam, ab? Consectetur repellendus impedit ex voluptatum alias numquam modi, veniam eaque quibusdam doloribus adipisci non id quia beatae. Cum repellendus vel voluptate optio ipsam doloribus, facere illo sunt! Odit, doloremque sit dignissimos commodi temporibus quibusdam animi!</p>
            
        </div>
    </div>
    <div class="row">
        <div class="container">
        <section >
        <h3>Upcoming and past Events</h3>
                <div class="card-group">
                  {{-- @foreach ($events as $event) --}}
                      
                  
                    <div class="card" style="margin: 20px" >
                      {{-- <img href="" src="{{$event->photo}}" class="card-img-top" alt="event picture" width="245" height="138"> --}}
                      <div class="card-body">
                        {{-- <h5 href="#" class="card-title">{{$event->title}}</h5> --}}
                        {{-- <p class="card-text"><small class="text-muted">{{$event->updated_at}}</small></p> --}}
                    </div>
                    </div>
                  {{-- @endforeach --}}
        
            
        </section>
    </div>
    </div>

@endsection