@extends('template.user_calendar') 

@section('content')

<div class="container">

    <h1>Calendar and Events</h1>

    <div id='calendar'></div>

</div>

  

<script type="text/javascript">

  

$(document).ready(function () {

      

    /*------------------------------------------

    --------------------------------------------

    Get Site URL

    --------------------------------------------

    --------------------------------------------*/

    var SITEURL = "{{ url('/') }}";

    

    /*------------------------------------------

    --------------------------------------------

    CSRF Token Setup

    --------------------------------------------

    --------------------------------------------*/

    $.ajaxSetup({

        headers: {

        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }

    });

      

    /*------------------------------------------

    --------------------------------------------

    FullCalender JS Code

    --------------------------------------------

    --------------------------------------------*/

    var calendar = $('#calendar').fullCalendar({

                    editable: true,

                    events: SITEURL + "/user-fullcalender",

                    displayEventTime: false,

                    editable: true,

                    eventRender: function (event, element, view) {

                        if (event.allDay === 'true') {

                                event.allDay = true;

                        } else {

                                event.allDay = false;

                        }

                    },

                    selectable: true,

                    selectHelper: true,

                });

 

    });

      

    /*------------------------------------------

    --------------------------------------------

    Toastr Success Code

    --------------------------------------------

    --------------------------------------------*/

    function displayMessage(message) {

        toastr.success(message, 'Event');

    } 

    

</script>

@endsection
