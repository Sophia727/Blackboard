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
    {{-- <x-searchUser view="post-login.admin.lists.studentsList"/> --}}
  </div>
  {{-- <div class="d-flex justify-content-end">{{$specialities->links()}}</div>        --}}
</div><div class="row">
    
    <div class="card-body">
        <div class="table-responsive table-striped text-center">
          <table class="table  table-sm">
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Subjects</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tbody>
                @foreach ($speciality as $spec)
                <tr>
                  
                  <td>{{$spec->name}}</td>
                  {{-- <td>{{$spec->subjects->name}}</td> --}}
                  
                  <td> 
                    {{-- <a href="{{route('user.profile', ['id'=>$user->id])}}" title="profile" class="btn btn-sm"><i class="fa-solid fa-eye"></i></a> --}}
                    <i class="fa-solid fa-messages"></i>
                  </td>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
    </div>
    {{-- <div class="d-flex justify-content-end">{{$specialities->links()}}</div> --}}

</div>

@endsection