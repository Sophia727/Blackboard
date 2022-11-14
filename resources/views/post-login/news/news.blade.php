@extends('template.user_homepage')

@section('content')

<div class="container">
    <div class="row">
        {{-- alert message box --}}
        @if(session('status'))
        <x-alert type="success" :message="session('status')" class="mb-4"/>   
        @endif
        @if(session('error'))
        <x-alert type="danger" :message="session('error')" class="mb-4"/>   
        @endif
    <div class="col-6">
        <h2>
            <strong>What's New?</strong>
        </h2>
    </div>
    <div class="col-6">
        <div class="row text-right">
            <div class="col-8">
                <x-searchPost/>
            </div>
            <div class="col-4">
                <div >
                    <a href="{{route('write.post')}}" class="btn btn-outline-primary" title="writePost" data-bs-placement="right"><i class="fa-solid fa-pen-to-square"></i>  New Post</a>
                </div>
            </div>
        </div>
    </div>
        </div>
        <div class="row"><div class="div">{{$posts->links()}}</div>
    </div>
    </p>
    
    <li class="list-group">
        @foreach ($posts as $post)
        <div class="row mb-4">
            <div class="col-4">
                <a class="" href="#">
                    {{-- <img src="{{asset('images/dummy-image.jpg')}}" style="width: 15rem; border-radius:5%" alt="placeholder"/> --}}
                    @if($post->photo)
                    @if(Str::contains($post->photo, 'https://'))
                      <img src="{{$post->photo}}" alt="{{$post->title}}"  style="width: 17rem; border-radius:2%"/>
                      @else
                      <img src="{{asset("storage/".$post->photo)}}" alt="{{$post->title}}" style="width: 17rem; border-radius:2%"/>
                    @endif
                    @else
                    <img src="{{asset('images/dummy-image.jpg'.$post->photo)}}"alt="{{$post->title}}" style="width: 17rem; border-radius:2%"/>
                    
                  @endif 
                </a>
            </div>
            <div class="col-8">
                <h2 class="card-title">
                    <a href="{{route('news.readmore', ['post'=>$post->id])}}" class="text-dark">{{$post->title}}</a>
                </h2>
                <p class="card-text">{{Str::limit($post->description,'150')}}</p>
                
                <div class="row mb-5">
                    <div class="col-2">
                        <img src="{{$post->author->photo}}" style="width:5rem; height:5rem; border-radius:50%" alt="author's picture">
                    </div>
                    <div class="col-7">
                        <p>{{$post->author->name}}</p>
                        <span class="text-muted" data-date="2022-08-19T13:25:00.000-07:00">{{$post->updated_at}}</span>

                    </div>
                    <div class=" col text-right">
                        <a href="{{route('news.readmore', ['post'=>$post->id])}}" class="btn btn-outline-primary">Read more</a>
                    </div>
                </div>
                

            </div>
        </div>
        
        @endforeach
        <div class="div">{{$posts->links()}}</div>

    </li>
</div>
@endsection