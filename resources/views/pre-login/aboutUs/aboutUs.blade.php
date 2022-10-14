@extends('template.homepage')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <h2>Learn more about us</h2>
            <div class="col-lg-12">
                <H4>History</H4>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
        
                            <div style="display:inline-block;width:100%;overflow-y:auto;">
                            <ul class="timeline timeline-horizontal events">
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
                <div class="col-lg-12 mission">
                    <H4>Mission</H4>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente soluta voluptatem laudantium placeat, nobis obcaecati officia quo minima sed eius enim velit natus illo nostrum praesentium rerum quia quis mollitia? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere magnam illo temporibus corporis sequi fugiat quo quod explicabo modi, voluptatibus aperiam sed, impedit molestiae consectetur ab quos distinctio reiciendis soluta dolorum deserunt. Quibusdam, doloremque vitae!</p>
                            </div>
                        </div>
                    </div>
                </div>
            
                
            </div>
        </div>
        
@endsection
