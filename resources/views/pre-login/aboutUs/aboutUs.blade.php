@extends('template.homepage')
@section('content')
    <h2>Learn more about us</h2>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <H4>History</H4>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
        
                            <div style="display:inline-block;width:100%;overflow-y:auto;">
                            <ul class="timeline timeline-horizontal events">
                                <li class="timeline-item">
                                    <div class="px-4">
                                        <div class="event-date bg-soft-primary text-primary">1980</div>
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
                                        <div class="event-date bg-soft-danger text-danger">Oct. 1985</div>
                                        <h5 class="font-size-16">1st Event</h5>
                                        <p class="text-muted">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt voluptatibus eius ipsum!</p>
                                        <div>
                                            <img src="{{asset('images/event.jpg')}}" width="200px" height="180px" style="border-radius: 50%">
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-item">
                                    <div class="px-4">
                                        <div class="event-date bg-soft-warning text-warning">Dec 1985</div>
                                        <h5 class="font-size-16">Media is talking about us!</h5>
                                        <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta esse praesentium ipsa nesciunt.</p>
                                        <div>
                                            <img src="{{asset('images/press.jpg')}}" width="200px" height="180px" style="border-radius: 50%">
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-item">
                                    <div class="px-4">
                                        <div class="event-date bg-soft-warning text-warning">Oct 1986</div>
                                        <h5 class="font-size-16">Partnerships are expanding!</h5>
                                        <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit odio nam error ipsum. Illo, provident.</p>
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
        
@endsection
