@extends('template.homepage')
@section('content')
<section class="preLogin_news_section">
<div class="container">
    
    <li class="list-group" style="list-style: none">
        
        <div class="row">
            <div class="col-1">
                <span></span>
            </div>
            <div class="col-8" style="padding: 0 20px 0 20px;">
                <span class="text-muted">{{$post->updated_at}}</span>

                <h2 class="card-title">
                    <a href="#">{{$post->title}}</a>
                </h2>
                <div class="card-header">
                    <img src="{{$post->photo}}" class="news_image" alt="placeholder"/>
                </div>
                <hr>
                <p class="card-text">{{$post->description}}</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit laudantium illum tenetur incidunt voluptate nemo, consectetur rem deserunt tempore architecto illo ratione minima libero quaerat minus dolorem delectus possimus quos enim nesciunt adipisci aspernatur? Eum nemo fugiat, saepe voluptatem dolorem accusamus nesciunt esse, numquam maxime sit obcaecati est fuga dolor!</p>
                <p>Numquam mollitia dolorum accusamus nemo officia, quia odio incidunt odit delectus suscipit aspernatur non est libero ab quo fuga aliquid nobis in aut ipsam beatae consequuntur. Aperiam, distinctio. Consectetur itaque praesentium ex, cumque nulla quibusdam labore incidunt accusantium dolorum harum esse officia molestiae maiores aspernatur eum perspiciatis qui est natus omnis quisquam. Iure iusto aperiam nostrum impedit nam voluptate molestias numquam explicabo, ut saepe sequi odit doloribus! Perferendis incidunt voluptas iste vero nemo possimus neque ex inventore ratione blanditiis, commodi error, natus facilis laboriosam saepe nisi nostrum. Eius ducimus voluptatum sit nobis.</p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ut, exercitationem? Rerum a non tenetur minus asperiores! Illo earum a labore cupiditate minus! Aspernatur saepe, nesciunt voluptas vitae ipsum modi assumenda itaque officia odio, fugiat dignissimos praesentium debitis ab doloribus iste eveniet maiores iure! Quasi mollitia sapiente fugit, repellendus eum totam blanditiis consectetur tempora quisquam laudantium laborum culpa ducimus vitae accusantium soluta excepturi, asperiores ad eius, voluptatum maxime dolore doloremque veritatis sit voluptate? Quidem quos distinctio excepturi iure aspernatur necessitatibus ad! Consequuntur quae fuga nisi officiis unde error ipsa nesciunt amet. Ducimus nostrum aspernatur tenetur inventore cumque laborum, adipisci quas vitae quia incidunt numquam, voluptate at iusto exercitationem odio rem! Consequuntur perferendis alias porro eum recusandae. Reprehenderit quam officia laudantium voluptates?
                <hr>
                <div class="row">
                    <div class="col-2">
                        <img src="{{$post->author->photo}}" style="width:5rem; height:5rem; border-radius:45%; " alt="author's picture">
                    </div>    
                    <div class="col-10">
                        <p>{{$post->author->name}}</p>
                    </div>
                    
                </div>
                <div class="row">
                    
                </div>
            </div>
            
            {{-- side section --}}
            <div class="col-3">
                <section>
                    <h4>Latest news</h4>
                    @foreach ($posts as $post)
                    <div class="row">
                        <div class="col-5">
                            <img src="{{$post->photo}}" style="width: 80px;" alt="picture"/>
                        </div>
                        <div class="col-7">
                            {{$post->title}}
                            title
                        </div>
                        <hr>
                    </div>
                    @endforeach
                </section>
            </div>
        </div>
        
    </li>
</div>
<div class="col-1"></div>




</section>
@endsection