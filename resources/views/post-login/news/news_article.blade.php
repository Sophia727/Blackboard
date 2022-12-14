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
        </div>
    
    <li class="list-group" style="list-style: none">
        
        <div class="row">
            <div class="col-1">
                <span></span>
            </div>
            <div class="col-8" style="padding: 0 20px 0 20px;">
                <div class="row">
                    <div class="col">
                        <span class="text-muted">{{$post->updated_at->format('d.m.Y-H:m')}}</span>
                    </div>
                    @if (Auth::user()->role==='admin')    
                    <div class="col text-right">
                        <a href="{{route('edit.post', ['post'=>$post->id])}}"> <i class="bi bi-pencil-square text-primary px-1 fa-xl"></i></a>
                        
                        <a href="#" onclick="if(confirm('Are you sure you want to delete this article?')){
                        document.getElementById('post-{{$post->id}}').submit();}"
                         title="Delete">
                         <i class="bi bi-trash text-danger px-1 fa-xl"></i>
                      
                        </a>
                        <form id="post-{{$post->id}}" action="{{route('delete.post', ['post'=>$post->id])}}" method="POST">
                        @csrf
                        @method('delete')
                        </form>
                
                    </div>
                    @endif
                </div>
                
                <h2 class="card-title">
                    {{$post->title}}
                </h2>
                <div class="mt-4 mb-5 text-center">
                    @if($post->photo)
                    @if(Str::contains($post->photo, 'https://'))
                      <img src="{{$post->photo}}" alt="{{$post->title}}"  style="width: 27rem; border-radius:2%"/>
                      @else
                      <img src="{{asset("storage/".$post->photo)}}" alt="{{$post->title}}" style="width: 27rem; border-radius:2%"/>
                    @endif
                    @else
                    <img src="{{asset('images/dummy-image.jpg'.$post->photo)}}"alt="{{$post->title}}" style="width: 27rem; border-radius:2%"/>
                    
                  @endif 
                </div>
                
                <p class="card-text">{{$post->description}}</p>
                    <p>Numquam mollitia dolorum accusamus nemo officia, quia odio incidunt odit delectus suscipit aspernatur non est libero ab quo fuga aliquid nobis in aut ipsam beatae consequuntur. Aperiam, distinctio. Consectetur itaque praesentium ex, cumque nulla quibusdam labore incidunt accusantium dolorum harum esse officia molestiae maiores aspernatur eum perspiciatis qui est natus omnis quisquam. Iure iusto aperiam nostrum impedit nam voluptate molestias numquam explicabo, ut saepe sequi odit doloribus! Perferendis incidunt voluptas iste vero nemo possimus neque ex inventore ratione blanditiis, commodi error, natus facilis laboriosam saepe nisi nostrum. Eius ducimus voluptatum sit nobis.</p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ut, exercitationem? Rerum a non tenetur minus asperiores! Illo earum a labore cupiditate minus! Aspernatur saepe, nesciunt voluptas vitae ipsum modi assumenda itaque officia odio, fugiat dignissimos praesentium debitis ab doloribus iste eveniet maiores iure! Quasi mollitia sapiente fugit, repellendus eum totam blanditiis consectetur tempora quisquam laudantium laborum culpa ducimus vitae accusantium soluta excepturi, asperiores ad eius, voluptatum maxime dolore doloremque veritatis sit voluptate? Quidem quos distinctio excepturi iure aspernatur necessitatibus ad! Consequuntur quae fuga nisi officiis unde error ipsa nesciunt amet, adipisci quas vitae quia incidunt numquam, voluptate at iusto exercitationem odio rem! Consequuntur perferendis alias porro eum recusandae.
                <hr class="card-footer">
                <div class="row">
                    
                    <div class="col-2">
                        <img src="{{$post->author->photo}}" style="width:5rem; height:5rem; border-radius:45%; " alt="author's picture">
                    </div>    
                    <div class="col-10 mt-4">
                        <p>{{$post->author->name}}</p>
                    </div>
                    
                </div>
            
                <section style="margin: 50px 0;">
                <div class="row">
                    <div>
                        {{-- <div class="card"> --}}
                            {{-- <div class="card-header"> --}}
                                
                                <h5 class="card-title">Leave a comment:</h5>
                            {{-- </div> --}}
                            <div>
                                <div class="row">
                                    
                                
                                    <div class="col">
                                        <form action="{{route('store.comment')}}" method="post" enctype="multipart/form-data" class="mb-5"> 
                                        @csrf
                                        <textarea class="form-control" id="exampleFormControlTextarea1" name='message' style="border-radius:20px; margin-left:0%; background-color:lavender;"></textarea>
                                        <input type="hidden" name="post_id" value="{{ $post->id }}" />
                                        
                                    </div>
                                    <div class="col-2">
                                        <button class="btn btn-md btn-primary" type="submit"> <i class="bi bi-check">Publish</i> </button>
                                    </div>
                                        </form>                        
                                </div>  

                                <div class="row ">
                                    <section>                                     
                                        @foreach ($comments as $comment)
                                        <div class="row mb-5">
                                            <div class="col-2">
                                                <img src="{{$post->author->photo}}" style="width:5rem; height:5rem; border-radius:45%; " alt="Profile Picture">                                            </div>
                                            <div class="col-10">
                                                <div class="row">
                                                    {{-- <div class="col-3 text-left">
                                                    </div> --}}
                                                    <div class="col text-left">
                                                        <p>{{$comment->user->name}} <small class="text-muted"> .{{$comment->updated_at->format('d.m.Y-H:m')}}</small></p>
                                                    </div>
                                                    <div class="col-2">
                                                        {{-- delete --}}
                                                        @if (Auth::user()->role==='admin')
                                                        <a href="#" onclick="if(confirm('Are you sure you want to delete this comment?')){
                                                        document.getElementById('comment-{{$comment->id}}').submit(); }"
                                                        class="btn btn-danger btn-sm" title="Delete">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                          </svg>
                                                        </a>
                                                        <form id="comment-{{$comment->id}}" action="{{route('destroy.comment', ['comment'=>$comment->id])}}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        </form>
                                                        
                                                        @endif
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <p class="card-text ml-4">{{$comment->message}}</p>

                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                           
                    
                    </div>
                </div>
            </section>
            
            </div>
            
            {{-- side section --}}
            <div class="col-3">
                <section>
                    <h4 class="mb-3">Latest news</h4>
                    @foreach ($posts as $post)
                    <div class="row mb-4">
                        <div class="col-5">
                            <img src="{{$post->photo}}" style="width: 100px;" alt=""/>
                        </div>
                        <div class="col-7">
                            {{$post->title}}
                            <div class="text-muted"><small>{{$post->created_at->format('d.m.Y H:m')}}</small></div>
                        </div>
                        
                    </div>
                    @endforeach
                </section>
            </div>
        </div>
        
    </li>
</div>
<div class="col-1"></div>





@endsection