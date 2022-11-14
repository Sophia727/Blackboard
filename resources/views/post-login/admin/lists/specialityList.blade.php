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
      <strong>Specialities</strong>
    </h1>
  </div>
  <div class="col-4">
  </div>
</div><div class="row">
    
    <div class="card-body">
      <div class="row mb-4">
        <div class="col-6 text-center">
          <strong>Name</strong>
        </div>
        <div class="col-2 text-center"><strong>View</strong></div>
        <div class="col-2 text-center"><strong>Students List</strong></div>
        <div class="col-2 text-center"><strong>Add Subject</strong></div>

      </div>
    
        @foreach ($specialities as $speciality)
        <div class="row mb-4">    
        <div class="col-6  text-center">
          {{$speciality->name}}
          </div>
          <div class="col-2 text-center"> 
           <a href="{{route('speciality.profile', ['view'=> 'post-login.admin.institution.speciality.specialityProfile', 'id'=>$speciality->id])}}"><i class="fa-solid fa-eye text-warning"> </i></a> 
          </div>
          <div class="col-2 text-center"> 
            <a class="text-dark"  href="{{route('add.grades',['view'=> 'post-login.users.professor.addGrades', 'id'=>$speciality->id])}}"><i class="bi bi-list-ul text-success"></i></a>
          </div>
          <div class="col-2 text-center">
            <a role="button"
              href="{{route('add.subject')}}">          
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" class="bi bi-plus-circle" fill="blue" viewBox="0 0 16 16">
                  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                </svg>
            </a>
          </div>
        </div>
          @endforeach
      </div>
                
              </tbody>
            </table>
          </div>
        </div>
    </div>

</div>

@endsection