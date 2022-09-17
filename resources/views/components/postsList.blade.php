@extends('template.user_homepage')
@section('content')

<h1>Posts list</h1>
<div class="row">
    {{-- alert message box --}}
    @if(session('status'))
    <x-alert type="success" :message="session('status')" class="mb-4"/>   
    @endif
    @if(session('error'))
    <x-alert type="danger" :message="session('error')" class="mb-4"/>   
    @endif
    <div class="card-body">
      <div class="table-responsive table-striped text-center">
        <table class="table table-sm">
          <thead>
            <tr>
              <th scope="col">Photo</th>
              <th scope="col">Title</th>
              <th scope="col">Content preview</th>
              <th scope="col">Author</th>
              <th scope="col">Pub. date</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($posts as $post)
              <tr>
              <td>
                @if($post->photo)
                    @if(Str::contains($post->photo, 'https://'))
                  <img src="{{$post->photo}}" alt="profile picture" width="80px" class="rounded-circle p-1"></td>
                  @else
                  <img src="{{asset($post->photo)}}" alt=" default picture" class="rounded-circle p-1" height="75px" width="80px">
                  @endif
                @else
                <img src="{{asset('storage/images/profile-default.jpg'.$post->photo)}}" class="rounded-circle p-1" alt="default" width="100px">
                
                @endif
              </td> 
              <td>{{$post->title}}</td>
              <td>{{ Str::limit($post->description,'15') }}</td>
              <td>{{$post->author_id}}</td>
              <td>{{$post->publication_date}}</td>
              <td> 
                
              </td>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
</div>
<div class="div">{{$role->links()}}</div>
@endsection