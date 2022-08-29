@extends('template.homepage')
@section('content')
<img src="{{asset('images/login-background.jpg')}}" alt="background image" width="1295px" height="600px">

<div class="container">
    @if (session('error'))
    <div class="alert alert-danger">
        {{session('error')}}
    </div>
@endif
</div>
<div class="container" style="position:absolute; left:35%; top:30%; border-radius:80px ; width: 400px ;height:350px; background-color:#d9e0e491; padding:40px">
    <form action="{{route('post.login')}}" method="POST" class="text-white">
        @csrf
        <h2>Access User Portal</h2>
        <div class="form-label-group">
            <input name="email" type="email" id="inputEmail" class="form-control @error('email') is-invalid @enderror"  placeholder="Email address" required autofocus style="
                border-color: #d9e0e491;
                box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(8, 64, 90, 0.384);" >
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror  
            </div>
          <br>
          <div class="form-label-group">
            <input name="password" type="password" id="inputPassword" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required autofocus style="
            border-color: #d9e0e491;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(8, 64, 90, 0.384);" >
            @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror  
            </div>
        <div class="contact100-form-checkbox">
            <input class="input-checkbox100" id="login-checkbox" type="checkbox" name="remember-me">
            <label class="label-checkbox100" for="login-checkbox">
            Remember me
            </label>
            </div>
            <div>
                <a href="#" class="txt1">
                Forgot password?
                </a>
            </div>
            <br>
            <div class="m-t-17">
                    <button type="submit" name="submit" class="btn btn-outline-light text-white btn-lg btn-block">
                        Login</button>
            </div>
    </form>

</div>
@endsection
