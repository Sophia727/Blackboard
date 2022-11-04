@extends('template.homepage')
@section('content')
    <div class="container aboutUs_section">
        <div class="row">
            <h2 style="text-transform: uppercase" class="mb-5 mt-4">Discover more about our University
                {{-- <hr> --}}
              </h2> 
            <div class="col-lg-12">
                <H4>History</H4>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
        
                            <div > 
                            <ul class="timeline timeline-horizontal events timeline_style">
                                <li class="timeline-item">
                                    <div class="px-4">
                                        <div class="event-date bg-soft-success text-success">1980</div>
                                        <h5 class="font-size-16">First Brick</h5>
                                        <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, omnis neque.</p>
                                        <div>
                                            <img src="{{asset('images/construction.jpg')}}" width="200px" height="180px" style="border-radius: 50%">
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-item">
                                    <div class="px-4">
                                        <div class="event-date bg-soft-success text-success">Sept. 1985</div>
                                        <h5 class="font-size-16">Inauguration</h5>
                                        <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, distinctio!</p>
                                        <div>
                                            <img src="{{asset('images/inauguration.jpg')}}" width="200px" height="180px" style="border-radius: 50%">
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-item">
                                    <div class="px-4">
                                        <div class="event-date bg-soft-success text-success">Oct. 1985</div>
                                        <h5 class="font-size-16">1st Event</h5>
                                        <p class="text-muted">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt voluptatibus eius ipsum!</p>
                                        <div>
                                            <img src="{{asset('images/event.jpg')}}" width="200px" height="180px" style="border-radius: 50%">
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-item">
                                    <div class="px-4">
                                        <div class="event-date bg-soft-success text-success">Dec 1985</div>
                                        <h5 class="font-size-16">Media is talking about us!</h5>
                                        <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta esse praesentium ipsa nesciunt.</p>
                                        <div>
                                            <img src="{{asset('images/press.jpg')}}" width="200px" height="180px" style="border-radius: 50%">
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-item">
                                    <div class="px-4">
                                        <div class="event-date bg-soft-success text-success">Oct 1986</div>
                                        <h5 class="font-size-16">Partnerships are expanding!</h5>
                                        <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt voluptatibus eius ipsum!</p>
                                        <div>
                                            <img src="{{asset('images/partnership.jpg')}}" width="200px" height="180px" style="border-radius: 50%">
                                        </div>
                                    </div>
                                </li>

                            </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card -->
               
                
            </div>
        </div>
    </div>
    <section class="mission">
        <div class="col-lg-12">
            <H4>Mission</H4>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente soluta voluptatem laudantium placeat, nobis obcaecati officia quo minima sed eius enim velit natus illo nostrum praesentium rerum quia quis mollitia? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere magnam illo temporibus corporis sequi fugiat quo quod explicabo modi, voluptatibus aperiam sed, impedit molestiae consectetur ab quos distinctio reiciendis soluta dolorum deserunt. Quibusdam, doloremque vitae!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="more-info">
        <div class="col-lg-12">
            <div class="row">
                <div class="col">
                    <img src="{{asset('images/happy_students.jpg')}}" class="happy_students_pic" alt="Happy Students" width="600px" height="auto">
                </div>
                <div class="col">
                    <div class="text-center getInTouch">
                <div>
                <h2>Need more information?</h2>
                <a href="{{route('contactUs')}}"><button class="btn git_btn">Get in touch!</button></a>
            </div></div>
            </div>

            
            </div>

            
          
        </div>
    </section>
@endsection
