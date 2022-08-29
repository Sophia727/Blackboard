@extends('template.homepage')
@section('content')
{{-- LES SLIDERS / caroussel--}}
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="margin-top: 0px;">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('images/InscripOuv.jpg')}}" class="d-block w-100" alt="les inscriptions sont ouvertes!" style="width: 100%">
            </div>
            <div class="carousel-item">
                <img src="{{asset('images/management.jpg')}}" class="d-block w-100" alt="management" style="width: 100%">
            </div>
            <div class="carousel-item">
                <img src="{{asset('images/architecture.jpg')}}" class="d-block w-100" alt="architecture" style="width: 100%">
            </div>
            <div class="carousel-item">
                <img src="{{asset('images/biology.jpg')}}" class="d-block w-100" alt="biology" style="width: 100%">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>


{{-- uni in numbers --}}
    <section>
        <div class="container" style="margin: 25px; text-align:center;">
            <h4>NOTRE UNIVERSITÉ EN CHIFFRES</h4>

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
                  <small class="text-muted">
                    Someone famous in <cite title="Source Title">Source Title</cite>
                  </small>
                </footer>
              </blockquote>
            </div>

            <div class="card">
              
              <div class="card-body">
                <h5 class="card-title text-muted" style="font-size: 5.8rem;">+500</h5>
                <p class="card-text" style="font-family: 'PT Serif',Arial,serif;">inscriptions par an</p>
              </div>
            </div>
            <div class="card bg-secondary text-white text-center p-3">
              <blockquote class="blockquote  text-right mb-0">
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
                <h5 class="card-title text-muted" style="font-size: 5.8rem;">+250</h5>
                <p class="card-text" style="font-family: 'PT Serif',Arial,serif;">d'entreprises partenaires</p>
              </div>
            </div>
          </div>
        </div>
    </section>
    {{-- posts news --}}
    <div style="background-color:#a7c5bd;">
    <section style="margin: 50px; padding:20px">
        <h3>Nouveautés</h3>
        <div class="card-group">
            <div class="card" style="margin: 20px" >
              <img href="" src="{{asset('images/dummy-image.jpg')}}" class="card-img-top" alt="..." width="245" height="138">
              <div class="card-body">
                <h5 href="#" class="card-title">Card title</h5>
                <p class="card-text"><small class="text-muted"> Updated 3 mins ago</small></p>
            </div>
            </div>

            <div class="card" style="margin: 20px">
              <img src="{{asset('images/dummy-image.jpg')}}" class="card-img-top" alt="..." width="245" height="138">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text"><small class="text-muted"> Updated 3 mins ago</small></p>
              </div>
            </div>

            <div class="card" style="margin: 20px">
              <img src="{{asset('images/dummy-image.jpg')}}" class="card-img-top" alt="..." width="245" height="138">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text"><small class="text-muted"> Updated 3 mins ago</small></p>
              </div>
            </div>

            <div class="card" style="margin: 20px">
              <img src="{{asset('images/dummy-image.jpg')}}" class="card-img-top" alt="..." width="245" height="138">
              <div class="card-body">
                <h5 href="#" class="card-title">Card title</h5>
                <p class="card-text"><small class="text-muted"> Updated 3 mins ago</small></p>
              </div>
            </div>

            <div class="card" style="margin: 20px">
              <img src="{{asset('images/dummy-image.jpg')}}" class="card-img-top" alt="..." width="245" height="138">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text"><small class="text-muted"> Updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
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
            height="300"
          />
        </div>

        <div class="col-lg-7 my-4">
          <h2>Un mot du recteur</h2>
          <p class="my-2">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil, quaerat incidunt. Vitae vero officiis dignissimos suscipit illum est enim amet repellendus ut. Esse aspernatur incidunt deleniti sequi velit modi distinctio eligendi quibusdam voluptate sit, perspiciatis totam nam minus vitae numquam.
          </p>
          <button class="btn btn-primary">Rejoignez-nous!</button>
        </div>
      </div>
    </div>
  </section> 
  
@endsection
