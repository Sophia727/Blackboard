@extends('template.homepage')
@section('content')
{{-- <img src="{{asset('images/login-background.jpg')}}" alt="background image" width="1295px" height="600px"> --}}
<div class="login-page">
<div class="container">
    @if (session('error'))
        <div class="alert alert-danger">
            {{session('error')}}
        </div>
    @endif
</div>
<div class="container login-frame">
    <form action="{{route('post.login')}}" method="POST" class="text-white">
        @csrf
        <h2>Access User Portal</h2>

        
        <div class="form-label-group">
            <input name="email" type="email" id="inputEmail" class="form-control @error('email') is-invalid @enderror"  placeholder="Email address" required autofocus>
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror  
            </div>
          <br>
          <div class="form-label-group">
            <input name="password" type="password" id="inputPassword" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required autofocus>
            @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror  
            </div>
        <div class="contact100-form-checkbox">                
                <a href="#" class="forgot-password text-light">
                Forgot password?
                </a>
            </div>
            <br>
            <div class="m-t-17">
                    <button type="submit" name="submit" class="btn btn-outline-light text-white btn-lg btn-block">
                        Login
                    </button>
                    <div id="contact_us_login">
                         <a type="button" href="{{route('contactUs')}}" >
                        <h6>Troubles accessing? Please contact-us.</h6>   
                    </a>
                    </div>
                   
            </div>
    </form>

</div>
</div>
@endsection
