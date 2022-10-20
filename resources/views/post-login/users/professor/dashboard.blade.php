@extends('template.user_homepage')
@section('content')
<div class="row">

    <div class="col">
        <h1>Dashboard</h1>
        <div class="row">
            
            <div class="col-md-4 col-xl-3">
                <div class="card bg-c-green order-card">
                    <a data-bs-toggle="collapse" role="button" aria-expanded="false" 
                    href="#grades" 
                    aria-controls="grades">
                        <div class="card-block">
                            <h3 class="m-b-20">Grades</h3>
                        </div>
                    </a>
                    
                </div>
            </div>
            <div class="col-md-4 col-xl-3">
                <div class="card bg-c-yellow order-card">
                    <a data-bs-toggle="collapse" role="button" aria-expanded="false" 
                    href="#posts" 
                    aria-controls="posts">
                        <div class="card-block">
                            <h3 class="m-b-20">Posts</h3>
                        </div>
                    </a>
                </div>
            </div>
           
              <div class="row">
                

                <div class="collapse multi-collapse" id="grades">
                    <div class="card card-body">
                        afficher GRADES
                    </div>
                </div>
                <div class="col-md-4 col-xl-3">
                    <div class="card bg-c-yellow order-card">
                        <a role="button"
                        href="{{route('prof.show.news')}}">
                            <div class="card-block">
                                <h3 class="m-b-20">Posts</h3>
                            </div>
                        </a>
                        
                        
                        </a>
                    </div>
                </div>
                
              </div>

        </div>
    </div>
</div>

@endsection