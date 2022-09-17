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
      <strong>Parents</strong>
    </h1>
  </div>
  <div class="col-4">
    <x-searchUser view="post-login.admin.lists.parentsList"/>
  </div>
  <div class="d-flex justify-content-end">{{$role->links()}}</div>       
</div><div class="row">
    <div class="card-body">
        <div class="table-responsive table-striped text-center">
          <table class="table  table-sm">
            <thead>
              <tr>
                <th scope="col">Photo</th>
              <th scope="col">Name</th>
              <th scope="col">E-mail</th>
              <th scope="col">Phone Number</th>
              <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tbody>
                @foreach ($role as $user)
                <tr>
                  <td>
                    @if($user->photo)
                      @if(Str::contains($user->photo, 'https://'))
                      <img src="{{$user->photo}}" alt="profile picture" class="rounded-circle p-1" height="75px" width="80px"></td>
                      @else
                      <img src="{{asset($user->photo)}}" alt="{{$user->name}}" class="rounded-circle p-1" height="75px" width="80px">
                      @endif
                    @else
                    <img src="{{asset('storage/images/profile-default.jpg'.$user->photo)}}" alt="{{$user->name}}" class="rounded-circle p-1" height="75px" width="80px">
                    @endif
                  </td> 
                  
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  <td>{{$user->phone}}</td>
                  <td> 
                    <a href="{{route('user.profile', ['id'=>$user->id])}}" title="profile" class="btn btn-sm"><i class="fa-solid fa-eye"></i></a>
                    <i class="fa-solid fa-messages"></i>
                  </td>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
    </div>
    <div class="d-flex justify-content-end">{{$role->links()}}</div>

</div>

@endsection