@extends('template.homepage')

@section('content')
<section class="preLogin_news_section">
<div class="container">
    
        <div class="row">
            <div class="col8"><h2 class="bigTitle">Welcome to our <strong>Community!</strong></h2></div>
            <div class="col-4 text-right"><div class="div">{{$posts->links()}}</div></div>
        </div>
    
    <li class="list-group" style="list-style: none">
        @foreach ($posts as $post)
        <div class="row">
            <div class="col-4">
                <a class="" href="#">
                    <img src="{{$post->photo}}" style="width: 15rem; border-radius:5%" alt="placeholder"/>
                </a>
            </div>
            <div class="col-8">
                <h2 class="card-title">
                    <a href="{{route('readmore.guest', ['post'=>$post->id])}}">{{$post->title}}</a>
                </h2>
                <p class="card-text">{{$post->description}}</p>
                <div class="text-right">
                    <a href="{{route('readmore.guest', ['post'=>$post->id])}}" class="btn btn-outline-primary">Read more</a>
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
</section>
@endsection