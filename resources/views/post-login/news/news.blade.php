@extends('template.user_homepage')

@section('content')

<div class="container">
    <p class="spacer" style="font-weight: 700; font-size: 24px; padding: 0 0 16px 0; margin: 48px 0 32px 0; border-bottom: 2px solid #e8ebed; line-height: 1.25;">
        <div class="row">
                {{-- alert message box --}}
                @if(session('status'))
                <x-alert type="success" :message="session('status')" class="mb-4"/>   
                @endif
                @if(session('error'))
                <x-alert type="danger" :message="session('error')" class="mb-4"/>   
                @endif
            <div class="col-6"><strong>LATEST NEWS</strong></div>
            <div class="col-6">
                <div class="row">
                    <div class="col">
                        <x-searchPost/>
                    </div>
                    <div class="col-4">
                        <div class="btn btn-outline-primary">
                            <a href="{{route('write.post')}}" class="text-primary" title="writePost" data-bs-placement="right"><i class="fa-solid fa-pen-to-square text-primary"></i>  New Post</a>
                        </div>
                    </div>
                </div>
                
              
            </div>
        </div>
        <div class="row"><div class="div">{{$posts->links()}}</div>
    </div>
    </p>
    
    <li class="list-group" style="list-style: none">
        @foreach ($posts as $post)
        <div class="row">
            <div class="col-4">
                <a class="" href="#">
                    {{-- <img src="{{asset('images/dummy-image.jpg')}}" style="width: 15rem; border-radius:5%" alt="placeholder"/> --}}
                    @if($post->photo)
                    @if(Str::contains($post->photo, 'https://'))
                      <img src="{{$post->photo}}" alt="{{$post->title}}"  style="width: 15rem; border-radius:5%"/>
                      @else
                      <img src="{{asset("storage/".$post->photo)}}" alt="{{$post->title}}" style="width: 15rem; border-radius:5%"/>
                    @endif
                    @else
                    <img src="{{asset('images/dummy-image.jpg'.$post->photo)}}"alt="{{$post->title}}" style="width: 15rem; border-radius:5%"/>
                    
                  @endif 
                </a>
            </div>
            <div class="col-8">
                <h2 class="card-title">
                    <a href="{{route('news.readmore', ['post'=>$post->id])}}" class="text-dark">{{$post->title}}</a>
                </h2>
                <p class="card-text">{{$post->description}}</p>
                <div class="text-right">
                    <a href="{{route('news.readmore', ['post'=>$post->id])}}" class="btn btn-outline-primary">Read more</a>
                </div>
                <div class="row">
                    <div class="col-2">
                        <img src="{{$post->author->photo}}" style="width:5rem; height:5rem; border-radius:45%" alt="author's picture">
                    </div>
                    <div class="col-10">
                        <p>{{$post->author->name}}</p>
                        <span class="text-muted" data-date="2022-08-19T13:25:00.000-07:00">{{$post->updated_at}}</span>

                    </div>
                </div>
                

            </div>
        </div>
        <hr>
        @endforeach
        <div class="div">{{$posts->links()}}</div>

    </li>
</div>
@endsection