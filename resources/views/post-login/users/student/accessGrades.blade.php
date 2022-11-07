@extends('template.user_homepage')
@section('content')

<div class="row">
    {{-- alert message box --}}
    @if(session('status'))
    <x-alert type="success" :message="session('status')" class="mb-4"/>   
    @endif
    @if(session('error'))
    <x-alert type="danger" :message="session('error')" class="mb-4"/>   
    @endif
    <div class="col-8">
      <h1>
        <strong>Grades</strong>
      </h1>
    </div>
</div>
  <div class="row justify-content-md-center">
    <div class="card w-75 bg-transparent">
      <div class="card-body">
        <div class="row">
          <div class="col text-left">
            <h3>{{Auth::User()->name}}</h3>
            <h6>Specialité: 
              @if (Auth::User()->speciality_id!='')
                    {{$user->spreciality_id->name}}
                    @else 
                    No Speciality assigned
                @endif
             </h6>
            <h6>Date d'inscription: {{Auth::User()->created_at->format('m/Y')}}</h6>
          </div>
          <div class="col-3 mt-4">
            <a href="{{route('myProfile')}}" title="myProfile">
            <div class="btn btn-outline-secondary">My Profile</div>
            </a>
          </div>
        </div>
       
      </div>
    </div>
  {{--***** MAIN table ******--}}
  
      <div class="card-body">
          <div class="table-responsive table-striped text-center">
            <table class="table table-sm">
              <thead>

                <tr>
                  <th>Subjects</th>
                
                  
                  <th scope="col"></th> 
                          
                </tr>
              </thead>
              <tbody>
                <tbody>

                  @foreach ($subjects as $subject)
                  <tr>
                    <td>
                     {{$subject->name}}
                     </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
            </div>
          </div>
      </div>
      {{-- <div class="d-flex justify-content-end">{{$role->links()}}</div> --}}
  
  </div>

@endsection

