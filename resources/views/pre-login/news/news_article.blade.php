@extends('template.homepage')
@section('content')

<div class="container">
    <p class="spacer" style="font-weight: 700; font-size: 24px; padding: 0 0 16px 0; margin: 48px 0 32px 0; border-bottom: 2px solid #e8ebed; line-height: 1.25;">
        <strong>LATEST NEWS</strong>
    </p>
    
    <li class="list-group" style="list-style: none">
        
        <div class="row">
            <div class="col-2">
                <span></span>
            </div>
            <div class="col-8" style="padding: 0 20px 0 20px;">
                <span class="text-muted">{{$post->updated_at}}</span>

                <h2 class="card-title">
                    <a href="#">{{$post->title}}</a>
                </h2>
                <div class="card-header">
                    <img src="{{asset('images/dummy-image.jpg') }}" style="width: 15rem; border-radius:5%" alt="placeholder"/>
                </div>
                <hr>
                <p class="card-text">{{$post->description}}</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit laudantium illum tenetur incidunt voluptate nemo, consectetur rem deserunt tempore architecto illo ratione minima libero quaerat minus dolorem delectus possimus quos enim nesciunt adipisci aspernatur? Eum nemo fugiat, saepe voluptatem dolorem accusamus nesciunt esse, numquam maxime sit obcaecati est fuga dolor!</p>
                <p>Numquam mollitia dolorum accusamus nemo officia, quia odio incidunt odit delectus suscipit aspernatur non est libero ab quo fuga aliquid nobis in aut ipsam beatae consequuntur. Aperiam, distinctio. Consectetur itaque praesentium ex, cumque nulla quibusdam labore incidunt accusantium dolorum harum esse officia molestiae maiores aspernatur eum perspiciatis qui est natus omnis quisquam. Iure iusto aperiam nostrum impedit nam voluptate molestias numquam explicabo, ut saepe sequi odit doloribus! Perferendis incidunt voluptas iste vero nemo possimus neque ex inventore ratione blanditiis, commodi error, natus facilis laboriosam saepe nisi nostrum. Eius ducimus voluptatum sit nobis.</p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ut, exercitationem? Rerum a non tenetur minus asperiores! Illo earum a labore cupiditate minus! Aspernatur saepe, nesciunt voluptas vitae ipsum modi assumenda itaque officia odio, fugiat dignissimos praesentium debitis ab doloribus iste eveniet maiores iure! Quasi mollitia sapiente fugit, repellendus eum totam blanditiis consectetur tempora quisquam laudantium laborum culpa ducimus vitae accusantium soluta excepturi, asperiores ad eius, voluptatum maxime dolore doloremque veritatis sit voluptate? Quidem quos distinctio excepturi iure aspernatur necessitatibus ad! Consequuntur quae fuga nisi officiis unde error ipsa nesciunt amet. Ducimus nostrum aspernatur tenetur inventore cumque laborum, adipisci quas vitae quia incidunt numquam, voluptate at iusto exercitationem odio rem! Consequuntur perferendis alias porro eum recusandae. Reprehenderit quam officia laudantium voluptates?
                <hr>
                <div class="row">
                    <div class="col">
                        <img src="{{asset('images/dummy-image.jpg')}}" style="width:5rem; height:5rem; border-radius:45%; " alt="author's picture">
                        <p>{{$post->author_id}}</p>

                    </div>
                    
                </div>
            </div>
            {{-- side section --}}
            <div class="col-2">
                <section>
                    <h4>Latest news</h4>
                    @foreach ($post as $post)
                    <div class="row">
                        <div class="col-5">
                            <img src="{{('images/dummy-image.jpg')}}" style="width: 5px;" alt="placeholder"/>
                        </div>
                        <div class="col-7">
                           this is a title
                        </div>
                        <hr>
                    </div>
                    @endforeach
                </section>
            </div>
        </div>
       
    </li>
</div>
@endsection