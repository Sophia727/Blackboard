<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>University </title>

        {{-- Calendar --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
       

        <!-- Fonts and styles / bootstrap and font awesome-->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
            
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <script src="https://kit.fontawesome.com/5c45cf9def.js" crossorigin="anonymous"></script>  
        <link rel="stylesheet" href="{{asset('css/post-login/dashboard.css')}}"> 
        <link rel="stylesheet" href="{{asset('css/post-login/myProfile.css')}}"> 
        <link rel="stylesheet" href="{{asset('css/post-login/generals.css')}}"> 
        <link rel="stylesheet" href="{{asset('css/post-login/aboutUs.css')}}">
        <link rel="stylesheet" href="{{asset('css/generalities/navbar.css')}}">
        <link rel="stylesheet" href="{{asset('css/generalities/footer.css')}}">
    

        
    </head>

    <body>
        <x-navbar_userLogged/>        
        <div class="row"> 
            <div class="col-1">
                {{-- @auth
                    @if (Auth::user()->role==='admin')
                        <x-sidebar_admin/>
                    @endif
                    
                @endauth         --}}
            </div>

            <div class="col">
                @yield('content') 
            </div>
            <div class="col-1">

            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </body>
    <footer>
        <x-footer/>
    </footer>

</html>
