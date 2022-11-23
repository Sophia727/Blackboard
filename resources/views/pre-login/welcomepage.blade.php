@extends('template.homepage')
@section('content')
{{-- LES SLIDERS / caroussel--}}
    <div class="carousel slide carousel-fade" data-ride="carousel">
      <div id="carouselslide" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('images/Inscriptions ouvertes!.jpg')}}" class="d-block w-100" alt="les inscriptions sont ouvertes!" style="width: 100%; height:656px">
                <button href="{{route('contactUs')}}" class="join-us">Join us now!</button>

            </div>
            <div class="carousel-item">
                <img src="{{asset('images/business2.jpg')}}" class="d-block w-100" alt="management" style="width: 100%; height:656px">
            </div>
            <div class="carousel-item">
                <img src="{{asset('images/architecture2.jpeg')}}" class="d-block w-100" alt="architecture" style="width: 100%; height:656px">
            </div>
            <div class="carousel-item">
                <img src="{{asset('images/medicine2.jpg')}}" class="d-block w-100" alt="biology" style="width: 100%; height:656px">
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


{{-- uni in numbers --}}
    <section>
        <div class="container" style="margin: 20px 50px; text-align:center;">
            <h4>NOTRE UNIVERSITÉ EN CHIFFRES</h4>
            <hr>
        <div class="card-columns">
            <div class="card">
    
              <div class="card-body" >
                <h5 class="card-title text-muted" style="font-size: 5.8rem;">97.4%</h5>
                {{--style="font-family: 'PT Serif',Arial,serif;" pour 97.4 et le tau de reussite --}}
                <p class="card-text" style="font-family: 'PT Serif',Arial,serif;">Taux de réussite</p>
              </div>
            </div>

            <div class="card p-3">
              <blockquote class="blockquote mb-0 card-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                <footer class="blockquote-footer">
                  <small class="text-muted ">
                    Someone famous in <cite title="Source Title">Source Title</cite>
                  </small>
                </footer>
              </blockquote>
            </div>
            <div class="card">
              
              <div class="card-body mb-0">
                <h5 class="card-title text-muted" style="font-size: 4rem;">+40% </h5>
                <p class="card-text" style="font-family: 'PT Serif',Arial,serif;">International Professors and Doctors</p>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <h5 class="card-title text-muted" style="font-size: 4.5rem;">+500</h5>
                <p class="card-text" style="font-family: 'PT Serif',Arial,serif;">Enrollements per year</p>
              </div>
            </div>
            <div class="card bg-secondary text-white text-center p-3">
              <blockquote class="blockquote  text-center mb-0">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
                <footer class="blockquote-footer text-white">
                  <small>
                    Someone famous in <cite title="Source Title">Source Title</cite>
                  </small>
                </footer>
              </blockquote>
            </div>
            <div class="card text-center">
              <div class="card-body">
                <h5 class="card-title text-muted" style="font-size: 5.8rem;">+35%</h5>
                <p class="card-text" style="font-family: 'PT Serif',Arial,serif;">d'étudiants internationnaux</p>
              </div>
            </div>
            
            <div class="card bg-dark text-white p-3 text-right">
              <blockquote class="blockquote mb-0">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                <footer class="blockquote-footer">
                  <small class="text-muted">
                    Someone famous in <cite title="Source Title">Source Title</cite>
                  </small>
                </footer>
              </blockquote>
            </div>
            <div class="card">
              <div class="card-body">
                <h5 class="card-title text-muted" style="font-size: 4.5rem;">+250</h5>
                <p class="card-text" style="font-family: 'PT Serif',Arial,serif;">d'entreprises partenaires</p>
              </div>
            </div>
            <div class="card bg-white text-secondary p-3 text-left">
              <blockquote class="blockquote">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi delectus molestiae beatae debitis quae, amet tempora illum facilis corrupti? Aliquid!.</p>
                <footer class="blockquote-footer">
                  <small class="text-muted">
                    Someone famous in <cite title="Source Title">Source Title</cite>
                  </small>
                </footer>
              </blockquote>
            </div>
          </div>
        </div>
    </section>
    {{-- posts news --}}
    <div style="background-color:#a7c5bd;">
    <section style="margin:50px ;padding:20px">
        <h3>News feed</h3>
        <div class="card-group">
          @foreach ($posts as $posts)                        
            <div class="card" style="margin: 20px" >
              <img href="" src="{{$posts->photo}}" class="card-img-top" alt="..." width="245" height="138">
              <div class="card-body">
                <h5 href="#" class="card-title">{{$posts->title}}</h5>
                <p class="card-text"><small class="text-muted">{{$posts->updated_at}}</small></p>
            </div>
            </div>
          @endforeach

    </section>
    </div>
{{-- news --}}
<div style="background-color:#4a4a4a;">
  <section style="margin:50px ;padding:20px">
      <h3 class="text-light">Recent and upcoming events</h3>
      <div class="card-group">
        @foreach ($events as $event)
                   
          <div class="card" style="margin: 10px; background:transparent;" >
            <div class="card-body">
              <h5 class="card-title text-light">{{$event->title}}</h5>
              <small class="text-muted">from:{{$event->start}}</small>
              <small class="text-muted">to: {{$event->end}}</small>

            </div>
          </div>
          <div class="vl"></div>
        @endforeach

  </section>
  </div>
 <section>
    <div class="container">
      <div class="row my-5 gx-lg-5 gx-4 align-items-center">
        <div class="col-lg-5">
          <img
            src="{{asset('images/cravatte.jpg')}}"
            alt="placeholder"
            class="rounded-circle img-fluid my-2"
            width="320"
            height="250"
          />
        </div>

        <div class="col-lg-7 my-4">
          <h2>A word from our Director</h2>
          <p class="my-2">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil, quaerat incidunt. Vitae vero officiis dignissimos suscipit illum est enim amet repellendus ut. Esse aspernatur incidunt deleniti sequi velit modi distinctio eligendi quibusdam voluptate sit, perspiciatis totam nam minus vitae numquam.
          </p>
          <button href="{{route('contactUs')}}" class="btn btn-primary">Join us!</button>
        </div>
      </div>
    </div>
  </section> 
  
@endsection
