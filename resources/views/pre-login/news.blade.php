@extends('template.homepage')
@section('content')

<div class="container">
    <p class="spacer" style="font-weight: 700; font-size: 24px; padding: 0 0 16px 0; margin: 48px 0 32px 0; border-bottom: 2px solid #e8ebed; line-height: 1.25;">
        <strong>LATEST NEWS</strong>
    </p>
    <li class="list-group" style="list-style: none">
        <div class="row">
            <div class="col-4">
                <a class="" href="#">
                    <img src="{{asset('images/dummy-image.jpg')}}" style="width: 15rem; border-radius:5%" alt="placeholder"/>
                </a>
            </div>
            <div class="col-8">
                <h2 class="card-title">
                    <a href="#">Lorem ipsum dolor sit amet.</a>
                </h2>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque, earum ipsum, aliquam iste deserunt aut sit illo officia, minima quis esse quasi sequi? Voluptas autem officia, alias dolor eius expedita!</p>
                <div class="text-right">
                    <a href="#" class="btn btn-outline-primary">Read more</a>
                </div>
                <div class="row">
                    <div class="col-2">
                        <img src="{{asset('images/dummy-image.jpg')}}" style="width:5rem; height:5rem; border-radius:45%" alt="author's picture">
                    </div>
                    <div class="col-10">
                        <p>Author name goes here</p>
                        <span class="text-muted" data-date="2022-08-19T13:25:00.000-07:00">date and time go here</span>

                    </div>
                </div>
                

            </div>
        </div>

    </li>
</div>
@endsection